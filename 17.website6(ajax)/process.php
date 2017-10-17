<?php  
	// echo "Hello world";
	//不仅仅输出,还可以将值返回

	if (isset($_GET['name'])) {
		echo "你的名字是 : ".$_GET['name'];
	}
	

	if (isset($_POST['name'])) {
		echo "你的名字是 : ".$_POST['name'];
	}
?>