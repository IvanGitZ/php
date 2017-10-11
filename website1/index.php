<!-- include 即使出错，下面的内容依然会展示 -->
<!-- require 出错之后下面的内容不会展示 -->

<?php  include "./inc/header.php" ?>
<?php  include_once "./inc/header.php" ?>
<h1>Home</h1>
<?php  include "./inc/footer.php" ?>

<!--
	include_once & require_once的作用
	重复引入,值识别一次!
-->
