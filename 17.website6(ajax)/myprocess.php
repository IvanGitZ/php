<?php  
	#1.连接数据库(面向过程和面向对象)
	
	$conn = mysqli_connect("localhost","root","","ajaxtest");

	if (isset($_POST['name'])) {
		echo "你的名字是 : ".$_POST['name'];
		$name = $_POST['name'];
		$query = "INSERT INTO users(name) VALUES('$name')";
		$result = mysqli_query($conn,$query);//执行sql语句,返回真和假
		if ($result) {
			echo "数据插入成功!";
		}else{
			echo "数据插入失败!".mysqli_error($conn);
		}
	}
?>