<?php  
	session_start();

	$name =  isset($_SESSION['name'])?$_SESSION['name']:"name属性不存在";
	$email =  isset($_SESSION['email'])?$_SESSION['email']:"email属性不存在";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 2</title>
</head>
<body>
	<a href="page1.php">Go to Page 1</a>
	<h2>你的名字是: <?php echo $name ?></h2>
	<h2>你的邮箱是: <?php echo $email ?></h2>
	<a href="page3.php">Go to Page 3</a>
</body>
</html>