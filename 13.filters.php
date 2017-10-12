<div class="container">
	<?php 
	#检查是否存在data的name属性
		// if (filter_has_var(INPUT_POST, "data")) {
		// 	// echo "data 存在!";

		// #处理不合法邮箱
		// 	$email = $_POST["data"];
		// 	// echo $email;
		// #过滤掉不合法的字符
		// 	$email = filter_var($email,FILTER_SANITIZE_EMAIL);
		// 	echo $email;
		// #验证是否是一个有效的邮箱
		// 	if (filter_input(INPUT_POST, "data",FILTER_VALIDATE_EMAIL)) {
		// 		echo "邮箱合法legal";
		// 	}else{
		// 		echo "邮箱不合法";
		// 	}
		// }else{
		// 	echo "data 不存在!";
		// }
		// echo "<br>";
		/*
		审核(如果不符合,过滤)
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		
		验证(是否有不符合内容)
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
	#练习 : 验证一个变量中的值,是否是合法的整型
		// $var = 23;
		// if (filter_var($var,FILTER_SANITIZE_NUMBER_INT)) {
		// 	echo $var."是int类型";
		// }else{
		// 	echo $var."不是int类型";
		// }
		// echo "<br>";
	#获取字符串中的所有数值
		// $var1 = "sakjdfhjasdhdh123156hasdkjhfouesfhroaeshj";
		// $var1 = filter_var($var1,FILTER_SANITIZE_NUMBER_INT);
		// echo $var1;

	#特殊字符
		// $var2 = "<script>alert(1)</script>";
		// echo $var2;//不删除特殊字符就会执行script
		// $var2 = filter_var($var2,FILTER_SANITIZE_SPECIAL_CHARS);
		// echo $var2;//删除特殊字符就不会执行script

	#验证数组中每个元素
		// $filters = array(
		// 	"data" => FILTER_VALIDATE_EMAIL,
		// 	"data2" => array(
		// 		'filter' => FILTER_VALIDATE_INT,
		// 		'options' => array(
		// 			'min_range' => 1,
		// 			'max_range' => 150
		// 		)
		// 	)
		// );
		// print_r(filter_input_array(INPUT_POST,$filters));
	#验证form表单中input的内容,第一个input一定是email
	#第二个input一定是数值,并且数值不能小于1大于150;
		// if (filter_input(INPUT_POST,"data",FILTER_VALIDATE_EMAIL)) {
		// 	echo "邮箱合法";
		// 	echo "<br>";
		// }else{
		// 	echo "邮箱不合法";
		// 	echo "<br>";
		// }
		// if (filter_input(INPUT_POST,"data2",FILTER_VALIDATE_INT)) {
		// 	echo "内容是数值";
		// 	echo "<br>";
		// 	$num = $_POST["data2"];
		// 	if($num>1 && $num<150){
		// 		echo $num."是要的值";
		// 		echo "<br>";
		// 	}else{
		// 		echo $num."超出范围";
		// 		echo "<br>";
		// 	}
		// }else{
		// 	echo "内容不是数值";
		// 	echo "<br>";
		// }

	$arr = array(
		"name" => "henry",
		"age" => "30",
		"email" => "Ivan@email.com"
	);

	$filters = array(
		"name" => array(
			"filter" => FILTER_CALLBACK,
			'options' => "ucwords"
		),
		"age" => array(
			"filter" => FILTER_VALIDATE_INT,
			'options' => array(
				"min_range" => 1,
				"max_range" => 150
			)
		),
		"email" => FILTER_VALIDATE_EMAIL
	);

	print_r(filter_var_array($arr,$filters));
	?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters / 过滤器</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<br>
			<input type="text" name="data" class="form-control">
			<input type="text" name="data2" class="form-control">
			<br>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>