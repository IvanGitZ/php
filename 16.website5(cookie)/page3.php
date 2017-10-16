<?php  
	$users = ["name" => "Henry","email" => "Henry@gmail.com","age" => 30];
	
	//将数组转化为字节流
	$users = serialize($users);

	//cookie只能存字符串(字节流)
	setcookie('users',$users,time()+86400);

	//将存在cookie中的字节流重新解码,再输出
	$newusers = unserialize($_COOKIE['users']);
	print_r($newusers);
?>