<?php 
	// $num = 6;
	// if ($num <= 4) echo "num的值一定是小于或者等于4";
	// echo "hello";
	//   //如果不写花括号,在条件执行的时候,执行所有的echo,
	// 	//如果条件判断不执行,紧跟在判断条件的echo不执行,其他正常执行
	

	// if ($num >= 4) {
	// 	echo "true";
	// } else {
	// 	echo "false";
	// }

	// $num = 4;
	// if ($num >= 4) {
	// 	if ($num <= 10){
	// 		echo "num一定是在4 ~ 10之间!";
	// 	}else{
	// 		echo "num大于4 并且大于10";
	// 	}
	// } else {
	// 	echo "num一定是小于4";
	// }


	#逻辑运算符
	// 与   &&,AND  
	// 或   ||,OR 
	// 非   !, 
	// 异或  XOR

	$num = 3;
	if ($num < 2 XOR $num < 10) {
		echo "111";
	}
	// AND : 有假即假
	// OR  : 有真即真
	// XOR : 只有一个为真,结果为真,两个都为真即假,两个都为假也为假
?>
<br>
<?php 
	#swith
	$favColor = 1;
	#(在php中case的判断条件为"==",只看值是否相等.而在js中case的判断条件为"===")
	switch ($favColor) {
		case "1":
			echo "angry";
			break;
		case 'yellow':
			echo "happy";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;
		default:
			echo "GUN";
			break;
	}
?>






















