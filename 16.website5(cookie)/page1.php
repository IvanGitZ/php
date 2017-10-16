<?php 
	#监听用户是否触发
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		//设置cookie setcookie("储存名,值,时间")
		setcookie('myUserName',$username,time() + 86400);
		header("Location:page2.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="text" name="username" placeholder="enter ur name!">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>