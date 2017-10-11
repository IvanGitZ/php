<?php  
	# function : 函数 - 具有某一功能的代码块
	/*
		Camel Case - myFunction()
		Lower Case - my_function()
		Pascal Case - MyFunction()
	*/
	//函数一定有返回值,无return时返回值为undefined
	//定义函数
		//无参数无返回值
	function SimpleFunction(){
		echo "在php中函数名称对大小写不敏感";
	}
		//调用函数
	// simpleFunction();


		//有参数无返回值
	function buyCigarette($money="20块钱"){
		echo $money."给了,但没给我买东西!拿钱跑了";
	}
		//调用函数
	// buyCigarette();
	// echo "<br>";
	// buyCigarette("30块钱");


		//多参有返回值
	function sumValue($num1,$num2){
		$sum = $num1 + $num2;
		return $sum;
	}
	$result = sumValue(5,6);
	// echo $result;

		//无参数有返回值
	function buyDrink(){
		return "饭后甜点!";
		echo "return后的代码不执行";
	}
		//调用函数
	// echo buyDrink();

	#函数传引用
	// $myNum = 10;
	// function addFive($num){
	// 	echo $num + 5;
	// }
	// addFive($myNum);

	$myNum = 10;
	function addFive(&$num){
	//&取地址(引用)改变内存中的值
		$num += 5;
	}
	//作用域出了函数就失效了,不会影响下面调用
	//但在函数中将内存中的值改变了,所以打印时也就改变了
	addFive($myNum);
	echo $myNum;
?>




