<?php 
	require("config/config.php");
	require("config/db.php");
	if (isset($_POST['submit'])) {
		#获取input中的数据
		$title = mysqli_real_escape_string($conn,$_POST['title']);
		$auther = mysqli_real_escape_string($conn,$_POST['auther']);
		$body = mysqli_real_escape_string($conn,$_POST['body']);
		if (!empty($title) && !empty($body) && !empty($auther)) {
			$query = "INSERT INTO posts(title,auther,body) VALUES ('$title','$auther','$body')";
			mysqli_query($conn,"set names utf8");
			if(mysqli_query($conn,$query)){
				header('location: index.php');
			}
		}
		
	}
?>

<?php include('inc/header.php') ?>
<div class="container">
	<h1 class="text-muted">添加博客</h1>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<div class="form-group">
			<label>标题</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label>作者</label>
			<input type="text" name="auther" class="form-control">
		</div>
		<div class="form-group">
			<label>内容</label>
			<input type="text" name="body" class="form-control">
		</div>
		<input type="submit" name="submit" class="btn btn-primary">
	</form>
</div>
<?php include('inc/footer.php') ?>