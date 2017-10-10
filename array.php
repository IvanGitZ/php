<?php 
	#array //作用:有效的利用资源
	// 数组 - 存储一堆数据的集合
	/*
		下标数组: 下标以0开始,以-0结尾
		关联数组: 以第一个添加的名字开头
	*/
	#下标数组
	$people = array('Kevin',"Henry","Hemiah");
	echo $people[1]."<br>";
	// echo $people[3];//数组越界

	$ids = [23,56,42];
	echo $ids[2]."<br>";

	$cars = ["Honda","Toyota","BYD"];
	$cars[3] = "BMW";
	echo $cars[3]."<br>";
	echo count($cars)."<br>";
	print_r($cars);//打印数组专用
	echo "<br>";
	#万能打印法
	var_dump($cars);
?>
<br>
<?php  
	#关联数组
	$people = array('Henry'=>35 ,'Bukcy'=>25,'Emily'=>20);
	echo $people["Emily"]."<br>";
	$people[] = 55;
	//不写key值从0开始
	print_r($people);

	$ids = [22=>"Henry",25=>"Bukcy",20=>"Emily"];
	echo $ids[22];

	#添加
	$ids[35] = "Emily";
	echo $ids[35]."<br>";
	print_r($ids)
?>
<!-- 下标数组不写下标直接插入到数组最后 -->
<br>
<br>
<?php  

	$mycar = array(
		array("Honda",20,10),
		array("VW",15,10),
		array("Ford",10,10),
	);
	echo $mycar[2][1];
?>

















