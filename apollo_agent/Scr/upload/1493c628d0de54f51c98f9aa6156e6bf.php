<?php 
	$file = $argv[0];
	$do= $argv[1];
	$script_file = $argv[2];
	$url = '';
	foreach ($argv as $argvkey =>$argvval){
		if($argvkey >0){
			$url .= $argvval.' ';
		}
		
	}
	$url = trim($url);
	exec("$url 2>&1",$out,$status);
	$outstr = implode("\n", $out);
	echo $outstr;
	exit ($status);
?>