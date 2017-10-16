<?php  
	//调用函数用来准备
	if (isset($_POST["submit"])) {//也可以使用filter_has_var
		session_start();
		//超全局变量
		$_SESSION['name'] = $_POST["name"];
		$_SESSION['email'] = $_POST["email"];
		//能将内容存到php中

		//php中跳转
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
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<input type="text" name="name" placeholder="enter name">
		<input type="text" name="email" placeholder="enter email">
		<input type="submit" name="submit" value="提交">
	</form>
</body>
</html>