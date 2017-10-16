<?php  
	session_start();
	//删除存在服务器中的信息
	unset($_SESSION['name']);
	unset($_SESSION['email']);
	//将所有存在服务器中的session内容都删除
	session_destroy();
?>