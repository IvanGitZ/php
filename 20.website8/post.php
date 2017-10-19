<?php  
	require("config/config.php");
	require("config/db.php");

	#实现删除博客
	if (isset($_POST['delete'])) {
		$delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);
		#sql语句
		$query = "DELETE FROM posts WHERE id='$delete_id'";
		if (mysqli_query($conn,$query)) {
			header("location: index.php");
		}else{
			echo "error".mysqli_error($conn);
		}
	}

	#查询单条信息
	mysqli_query($conn,"set names utf8");
	// $id = $_GET['id'];//只会拿到url地址拼接的
	// 用mysqli_real_escape_string('连接的数据库','具体哪个参数');转义特殊字符
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query = "SELECT * FROM posts WHERE id={$id}";
	$result = mysqli_query($conn,$query);
	$post = mysqli_fetch_assoc($result);//已经知道是关联数组
	// var_dump($post);
	mysqli_free_result($result);
	mysqli_close($conn);
?>

<?php include('inc/header.php') ?>
	<div class="container">
		<h1>博客详情</h1>
		<a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">返回主页</a>
		<div class="well">
			<h3><?php echo $post['title']; ?></h3>
			<p>
				<strong>ID:</strong><?php echo $post['id']; ?>
			</p>
			<p>
				<strong>作者: </strong><?php echo $post['auther']; ?>
			</p>
			<p>
				<strong>时间: </strong><?php echo $post['created_at']; ?>
			</p>
			<p>
				<?php echo $post['body']; ?>
			</p>
			<br>
			<form class="pull-right" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input type="submit" name="delete" class="btn btn-danger" value="删除">
			</form>
			<a class="btn btn-info " href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">编辑</a>
		</div>
	</div>
<?php include('inc/footer.php') ?>











