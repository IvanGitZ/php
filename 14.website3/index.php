<?php  
	$msg = "";
	$msgClass = "";
	#验证用户有没有触发submit按钮事件
	if (filter_has_var(INPUT_POST,"submit1")) {
		// echo "123";
	#拿到需要的内容
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
	#验证用户输入的内容是否为空
		if (!empty($name) && !empty($email) && !empty($message)) {
			#pass
			#验证邮箱是否合法
			if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) {
				#不合法
				$msg = "请输入合法邮箱";
				$msgClass = "alert-danger";
			}else{
				#合法
				$toEmail = '562281476@qq.com';
				$subject = '本周五BJH170705外出拓展';
				$body = "<h2>BJH170705每个周五都需要外出拓展！</h2>".
						"<h4>姓名：".$name."</h4>
						<h4>邮箱：".$email."</h4>
						<h4>内容：".$message."</h4>";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= "发自: ".$name."<".$email.">"."\r\n";
				#判断邮件发送是否成功
				if (mail($toEmail, $subject, $body ,$headers)) {
					# success
					$msg = "邮件发送成功!";
					$msgClass =  "alert-success";
				}else{
					# failed
					$msg = "邮件发送失败!";
					$msgClass =  "alert-danger";
				}
			}
		}else{
			$msg = "请输入对应的内容";
			$msgClass = "alert-danger";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.min.css">
	<title>PHP Mail Sender</title>
</head>
<body>
	<!-- 导航 -->
	<!-- navbar-default是黑色 navbar-inverse是去反色 navbar-light是白色 -->
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">邮件发送</a>
			</div>
		</div>
	</nav>
	<!-- form -->
	<div class="container">
	<!-- 友情提示 -->
		<?php if($msg != ""):?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
	<!-- 友情提示结束 -->
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>姓名</label>
				<input 
					type="text" 
					name="name" 
					value="<?php echo isset($_POST['name'])?$name:"" ?>"  
					class="form-control">
			</div>
			<div class="form-group">
				<label>邮箱</label>
				<input 
					type="text" 
					name="email" 
					value="<?php echo isset($_POST['email'])?$email:"" ?>" 
					class="form-control">
			</div>
			<div class="form-group">
				<label>信息</label>
				<textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : "" ?></textarea>
			</div>
			<button name="submit1" class="btn btn-default btn-block" type="submit">发送</button>
		</form>
	</div>
</body>
</html>