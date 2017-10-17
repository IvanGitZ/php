<?php  
	# 连接数据库
	$conn = mysqli_connect("localhost","root","","ajaxtest");
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);//执行语句
	$users = mysqli_fetch_all($result,MYSQLI_ASSOC);

	echo json_encode($users);//将得到的数组转化为json数据
?>