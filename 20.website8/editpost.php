<?php  
	require("config/config.php");
	require("config/db.php");

	#编辑博客
	if (isset($_POST['submit'])) {
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$auther = mysqli_real_escape_string($conn,$_POST['auther']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		//获取id
		$update_id = mysqli_real_escape_string($conn,$_POST['update_id']);
		if (!empty($title) && !empty($body) && !empty($auther)) {
			$query = "UPDATE posts SET title='$title',auther='$auther',body='$body' WHERE id='$update_id'";
			mysqli_query($conn,"set names utf8");
			if(mysqli_query($conn,$query)){
				header('location: index.php');
			}
		}
	}

	#取到值存入输入框中
	mysqli_query($conn,"set names utf8");
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	$query = "SELECT * FROM posts WHERE id={$id}";
	$result = mysqli_query($conn,$query);
	$post = mysqli_fetch_assoc($result);//已经知道是关联数组
	mysqli_free_result($result);
	mysqli_close($conn);


?>

<?php include('inc/header.php') ?>
<div class="container">
	<h1 class="text-muted">编辑博客</h1>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<div class="form-group">
			<label>标题</label>
			<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
		</div>
		<div class="form-group">
			<label>作者</label>
			<input type="text" name="auther" class="form-control" value="<?php echo $post['auther']; ?>">
		</div>
		<div class="form-group">
			<label>内容</label>
			<input type="text" name="body" class="form-control" value="<?php echo $post['body']; ?>">
		</div>
		<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
		<input type="submit" name="submit" class="btn btn-primary" value="确认">
	</form>
</div>
<?php include('inc/footer.php') ?>