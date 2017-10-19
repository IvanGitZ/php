<?php 
	//连接配置文件
	require("config/config.php");
	require("config/db.php");
	#设置utf8
	mysqli_query($conn,"set names utf8");
	#设置sql语句
	$query = "SELECT * FROM posts ORDER BY created_at DESC";//DESC降序
	#执行语句
	$result = mysqli_query($conn,$query);
	#获取数据
	$posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
	// var_dump($posts);
	#释放数据
	mysqli_free_result($result);//将结果释放
	#断开连接
	mysqli_close($conn);//参数为需要断开的连接
?>

<!-- 引入inc文件夹下的头和尾 -->
<?php include('inc/header.php') ?>
	<div class="container">
		<h1>博客总览</h1>
		<?php foreach($posts as $post): ?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<p>
					<strong>作者: </strong><?php echo $post['auther']; ?>
				</p>
				<p>
					<strong>时间: </strong><?php echo $post['created_at']; ?>
				</p>
				<p>
					<?php echo $post['body']; ?>
				</p>
				<!-- 通过id去标识跳转的具体页面,利用php拼接各自的id -->
				<a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-info">博客详情</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php include('inc/footer.php') ?>






















