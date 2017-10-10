<?php 
#变量
	// echo "Hello World";
	// 单行注释 快捷键: command + /
	# 单行注释 快捷键 : shift + 3
	/*
		多行注释
		快捷键: command + option + /
	*/
	$output = "Hello World!";
	echo $output;
	/*
		- 前缀 $(定义时要用,调用时也要用)
		- 以字母/数字/下划线组成
		- 不能以数字开头
		- 大小写敏感
	*/
	// syntax error:语法错误,可能是拼写错误,缺分号等
?>

<br>

<?php 
#数据类型
	/*	
		string Integer float boolean
		array object resource(返回的是函数)
	*/
	$num = 22;
	$float = 22.22;
	$bool = true;
	$bool2 = false;
	echo $num;
	echo $float;
	echo $bool;
	echo $bool2;

	#运算符
	$num1 = 10;
	$num2 = 20;
	$sum = $num1 + $num2;
	echo $sum;
 ?>

 <br>

 <?php 
 #字符串拼接
 	$string1 = "Hello";
 	$string2 = "World";
 	// 在php中+就是+,没有拼接功能;
 	// $greeting = $string1 + $string2;
 	$greeting = $string1." ".$string2."!";
 	echo $greeting;
  ?>
	
  <br>

 <?php 
 #php中引号的区别
 	$greeting2 = '$string1 $string2';
 	echo $greeting2;
 	// 单引号中的内容时单纯的字符串
 	$greeting3 = "$string1 $string2";
 	//双引号中的变量可以正常被解析
 	echo $greeting3;
  ?>

  <br>

<?php 
  #转义字符
  	$string3 = 'They\'re here';
  	echo $string3;
  	//echo不是个方法,只能打印字符串和变量,以及某个属性,不能答应数组
  	printf($string3);
  	echo "<hr>";
?>

   <br>

<?php 
#常量
	define("GREETING","WhatEver!");
	define("GREETING","What   Ever!",true);
	//常量的第三个参数为"true",表示不区分大小写
	echo GREETING."<br>";
	echo greeting."<br>";
	echo GREETING."<br>",greeting."<br>";
	var_dump(greeting);
?>






