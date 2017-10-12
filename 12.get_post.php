<div class="container">
	<?php  
	#$_GET
		//// echo $_GET["myName"];
		// 检查myName是否能够获取到
		// 第一次进入会报错,因为代码执行顺序,myName不能被获取到
		// 输入一个myName提交后才可以获取到
		if (isset($_GET["myName"]) && isset($_GET["myEmail"])){//判断myName是否被提交
			// echo $_GET["myName"];//
			$name = $_GET["myName"];
			$email = $_GET["myEmail"];
			if(!empty($name) && !empty($email)){
				echo $name." : ".$email; 
			}
		}
	#$_POST
		// if (isset($_POST["myName"]) && isset($_POST["myEmail"])){//判断myName是否被提交
		// 	// echo $_GET["myName"];//
		// 	$name = $_POST["myName"];
		// 	$email = $_POST["myEmail"];
		// 	if(!empty($name) && !empty($email)){
		// 		echo $name." : ".$email; 
		// 	}
		// 	print_r($_POST);
		// }
	#$_REQUEST
		// if (isset($_REQUEST["myName"]) && isset($_REQUEST["myEmail"])){//判断myName是否被提交
		// 	// echo $_GET["myName"];//
		// 	$name = $_REQUEST["myName"];
		// 	$email = $_REQUEST["myEmail"];
		// 	if(!empty($name) && !empty($email)){
		// 		echo $name." : ".$email; 
		// 	}
		// 	print_r($_REQUEST);
		// }
	#查询url地址后面的参数
		// echo $_SERVER['QUERY_STRING'];
	?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET & POST</title>
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form action="get_post.php" method="GET">
			<!-- method不写默认为get -->
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" name="myName">
			</div>
			<br>
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="myEmail">
			</div>
			<br>
			<input type="submit" class="btn btn-primary btn-block" type="submit" value="提交">
		</form>
		<ul class="list-group">
			<li class="list-group-item">
				<a href="get_post.php?name=赵帅;" class="btn btn-success btn-block">赵帅</a>
			</li>
			<li class="list-group-item">
				<a href="<?php echo $_SERVER["PHP_SELF"]."?name=郜超"; ?>" class="btn btn-info btn-block">郜超</a>
			</li>
		</ul>
		<h1>
			<?php if(isset($_GET["name"])){ echo $_GET["name"];} ?>
		</h1>
	</div>
</body>
</html>