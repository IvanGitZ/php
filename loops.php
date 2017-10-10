<?php  
	# 循环:loops  //作用:让项目制作的更高效
	# 根据某个条件,重复执行某段代码
	/*
		- For
		- While
		- Do...While
		- Foreach
	*/
	#For 循环
	#@params - init(初始化),condition(条件),increase(自增)
	// for ($i=0; $i < 10; $i++) { 
	// 	echo ($i+1)."<br>";
	// }
?>
<br>
<?php  
	#while 循环
	#@params - condition
	// $i = 0;
	// while ($i < 10) {
	// 	echo $i."<br>";
	// 	$i++;
	// }
?>
<br>
<?php  
	#do...while 循环
	#@params - condition
	// $i = 0;
	// do{
	// 	echo $i."<br>";
	// 	$i++;
	// }While($i < 10);
?>
<br>
<?php  
	#foreach
	// $people = array("Henry","Bucky","Emily");
	// foreach ($people as $person) {
	// 	echo $person;
	// 	echo "<br>";
	// }

	#foreach 循环 关联数组
	$people = array(
		"Henry"=>"henry@gmail.com",
		"Bucky"=>"bucky@gmail.com",
		"Emily"=>"emily@gmail.com"
	);
	foreach ($people as $key => $value) {
		echo $key." : ".$value;
		echo "<br>";
	}
?>
<!-- 
1.
	打印1-100之间7的倍数
	打印1-100之间个位为7的数
	打印1-100之间十位为7的数
	打印1-100之间和7无关的数
-->
<!--
2. 
	打印九九乘法表
-->




















