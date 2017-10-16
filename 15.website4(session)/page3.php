<?php  
	session_start();
	#改变session存储的值
	$_SESSION['name'] = "Hemiah";
	#获取session存储的值
	$name =  isset($_SESSION['name'])?$_SESSION['name']:"name属性不存在";
	$email =  isset($_SESSION['email'])?$_SESSION['email']:"email属性不存在";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 3</title>
</head>
<body>
	<h2><?php echo $name; ?></h2>
	<h2><?php echo $email; ?></h2>
	<a href="page2.php">Go to Page 2</a><br>
	<a href="page3.php">Go to Page 3</a>
</body>
</html>