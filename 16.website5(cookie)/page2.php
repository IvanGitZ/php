<?php  
	//重新赋值
	setcookie('myUserName',"selly",time() + 86400);
	//删除cookie
	// setcookie('myUserName',"asdf",time() - 3600);

	if (count($_COOKIE) > 0) {
		echo "一共有".count($_COOKIE)."条COOKIE";
	}else{
		echo "没有设置任何COOKIE";
	}

	echo "<br>";
	
	if (isset($_COOKIE['myUserName'])) {
			echo "你的用户名是 : ".$_COOKIE['myUserName'];
	}else{
		echo "用户名不存在!";
	}
?>