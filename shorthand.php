<?php  
	$loggedIn = true;
	$names = ["Henry","Bucky","Emily"];
	/*
	$loggedIn = true;
	if ($loggedIn) {
		echo "U r Logged In";
	}else{
		echo "U r Not Logged In";
	}
	echo "<br>";
	#三目运算符
	$log = $loggedIn ? "U r Logged In" : "U r Not Logged In" ;
	echo $log;
	echo "<br>";

	echo ($loggedIn) ? "U r Logged In" : "U r Not Logged In" ;
	echo "<br>";

	#简写得到true 或者 false
	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered;
	echo "<br>";

	#三目嵌套
	$age = 18;
	$score = 80;
	echo "Your score is ".($score>17?($age<20?"优秀":"一般"):($age<20?"一般":"差等"));
	*/

?>
<!-- html + php 嵌套语法糖🍬 -->

<div>
	<?php if($loggedIn){ ?>
		<p>Welcome to Beijing!</p>
	<?php }else{ ?>
		<p>Welcome to Zhengzhou!</p>
	<?php } ?>
</div>
<!-- 优化 -->
<div>
	<?php if($loggedIn): ?>
		<p>Welcome to Beijing!</p>
	<?php else: ?>
		<p>Welcome to Zhengzhou!</p>
	<?php endif; ?>
</div>

<!-- 遍历数组 -->

<div>
	<?php foreach ($names as $val) : ?>
		<p><?php echo $val; ?></p>
	<?php endforeach; ?>
</div>

<!-- 遍历数组使用for循环 -->
<div>
	<?php for ($i=0; $i < count($names); $i++) : ?>
		<p><?php echo $names[$i]; ?></p>
	<?php endfor; ?>
</div>










