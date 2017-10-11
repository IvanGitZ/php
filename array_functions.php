<?php 
	
	# 计算数组个数 count
	$array = array("Henry","Buckey","Emily"); 
	echo count($array);
	echo "<br>";

	# 将数组开头的单元移出数组 array_shift
	$array1 = array("Henry","Buckey","Emily"); 
	$newArray = array_shift($array1);
	print_r($newArray);
	print_r($array1);
	echo "<br>";

	# 在数组开头插入一个或多个单元 array_unshift
	$array2 = array("Henry","Buckey","Emily");
	array_unshift($array2,"Hemiah");
	print_r($array2); 
	echo "<br>";

	# 将一个或多个单元压入数组的末尾（入栈）array_push
	$array3 = array("Henry","Buckey","Emily");
	array_push($array3,"Ivan");
	print_r($array3);
	echo "<br>";
	# 弹出数组最后一个单元（出栈） array_pop
	$array4 = array("Henry","Buckey","Emily");
	array_pop($array4);
	print_r($array4);
	echo "<br>";

	# 数组排序 sort
	$values = array(22,44,78,23,1,4,6);
	sort($values);
	print_r($values);
	echo "<br>";

	# 数组转字符串 implode
	$arrayToString = array("a","b","c");
	$value = implode(",", $arrayToString);
	echo $value;
	echo "<br>";
	
	# 字符串转数组 explode
	$myArray = explode(",",$value);
	print_r($myArray);
	echo "<br>";
	var_dump($myArray);
?>