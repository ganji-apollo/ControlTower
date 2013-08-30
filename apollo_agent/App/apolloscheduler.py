# coding:utf-8

import logging
from logging.handlers import TimedRotatingFileHandler
from datetime import datetime, timedelta
from apscheduler.scheduler import Scheduler, logger
from apscheduler.triggers import SimpleTrigger, IntervalTrigger, CronTrigger   
from apscheduler.job import Job 
from apscheduler.events import *
from apscheduler.util import *

#logfile = '/data/apollo/apollo_agent/Log/debug.log'
#hdlr = TimedRotatingFileHandler(logfile, when='midnight', backupCount=2)
#formatter = logging.Formatter('%(asctime)s %(levelname)s %(message)s')
#hdlr.setFormatter(formatter)
#logger.addHandler(hdlr)
#logger.setLevel(logging.DEBUG)

class ApolloScheduler(Scheduler):
    def __init__(self, gconfig={}, **options):
        Scheduler.__init__(self, gconfig, **options)
        self._jobalias = {}
        

    def add_cron_job(self, key, jobname, func, year=None, month=None, day=None, week=None,
                     day_of_week=None, hour=None, minute=None, second=None,
                     start_date=None, args=None, kwargs=None, **options):
        if '' == jobname.strip():
            return
        trigger = CronTrigger(year=year, month=month, day=day, week=week,
                              day_of_week=day_of_week, hour=hour,
                              minute=minute, second=second,
                              start_date=start_date)
        return self.add_job(key, jobname, trigger, func, args, kwargs, **options)
        
        
    def add_job(self, key, jobname, trigger, func, args, kwargs, jobstore='default',
                **options): 
        job = Job(trigger, func, args or [], kwargs or {}, 
                    options.pop('misfire_grace_time', self.misfire_grace_time),
                    options.pop('coalesce', self.coalesce), name=jobname,  **options)
        job.key = key
        
        if not self.running:
            self._pending_jobs.append((job, jobstore))
        else:
            self._real_add_job(job, jobstore, True)
        return job

    def update_job(self, job, trigger, args, name, jobstore='default'):
        """update the job's trigger or cmd"""
        self._jobstores_lock.acquire()
        try:
            if trigger is not None:
                job.trigger = trigger
                job.compute_next_run_time(datetime.now())
            if args is not None:
                job.args = args
            if name is not None:
                job.name = name
            event = JobStoreEvent(EVENT_JOB_UPDATED, 'default' , job)
            self._notify_listeners(event)
        finally:
            self._jobstores_lock.release()

        self._wakeup.set()
    
    def get_jobs(self):
        """
        Returns a list of all scheduled jobs.

        :return: list of :class:`~apscheduler.job.Job` objects
        """
        self._jobstores_lock.acquire()
        try:
            jobs = []
            for jobstore in itervalues(self._jobstores):
                jobs.extend(jobstore.jobs)
            return dict([(job.key, job) for job in jobs])
        finally:
            self._jobstores_lock.release()

            
    def _process_jobs(self, now):
        """
        Iterates through jobs in every jobstore, starts pending jobs
        and figures out the next wakeup time.
        """
        next_wakeup_time = None
        self._jobstores_lock.acquire()
        try:
            for alias, jobstore in iteritems(self._jobstores):
                for job in tuple(jobstore.jobs):
                    run_times = job.get_run_times(now)
                    if run_times:
                        self._threadpool.submit(self._run_job, job, run_times)

                        # Increase the job's run count
                        if job.coalesce:
                            job.runs += 1
                        else:
                            job.runs += len(run_times)

                        # Update the job, but don't keep finished jobs around
                        if job.compute_next_run_time(now + timedelta(microseconds=1)):
                            jobstore.update_job(job)
                        else:
                            self._remove_job(job, alias, jobstore)

                    if not next_wakeup_time:
                        next_wakeup_time = job.next_run_time
                    elif job.next_run_time:
                        next_wakeup_time = min(next_wakeup_time,
                                               job.next_run_time)
            return next_wakeup_time
        finally:
            self._jobstores_lock.release()

