<?php  
	// date(); //至少给一个参数
	echo date("d");
	echo "<br>";

	echo date("m");
	echo "<br>";

	echo date("Y");
	echo "<br>";

	echo date("y");
	echo "<br>";

	echo date("l");
	echo "<br>";

	echo  date("Y/m/d");
	echo "<br>";

	echo  date("d-m-Y");
	echo "<br>";

	#时分秒
	echo date("h:i:s");//时:分:秒
	echo date("a");
	echo "<br>";

	#设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date("h:i:s");
	echo "<br>";

	#mktime
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp;
	echo "<br>";

	# 完整的时间
	echo date("m/d/Y h:i:sa",$timestamp);
	echo "<br>";

	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo date("m/d/Y h:i:sa",$timestamp2);
	echo "<br>";

	$timestamp3 = strtotime("tomorrow");
	echo date("m/d/Y h:i:sa",$timestamp3);
	echo "<br>";

	$timestamp4 = strtotime("next sunday");
	echo date("m/d/Y h:i:sa",$timestamp4);
	echo "<br>";

	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:sa",$timestamp5);
	echo "<br>";
?>


