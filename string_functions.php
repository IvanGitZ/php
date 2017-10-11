<?php  
	# string functin: 处理字符串的函数

	# 返回字符串的一部分 substr
	$output = "HelloWorld";
	// $output = substr($output, 1);
	$output = substr($output, 1,5);
	echo $output;
	echo "<br>";

	# 返回给定的字符串 string 的长度  strlen
	$output1 = "HelloWorld";
	$output1 = strlen($output1);
	echo $output1;
	echo "<br>";

	# 查找字符串首次出现的位置 strpos
	$output2 = "HelloWorld";
	$output2 = strpos($output2, "lo");
	echo $output2;
	echo "<br>";

	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	$output3 = "HelloWorld";
	$output3 = strrpos($output3, "l");
	echo $output3;
	echo "<br>";

	# 去除首尾空格trim
	$output3 = "  HelloWorld   ";
	echo strlen($output3);
	$newput3 = trim($output3);
	echo $newput3;
	echo "<br>";

	# 将字符串转为大写 strtoupper
	$str = "hello world";
	echo strtoupper($str);
	echo "<br>";

	# 将字符串转为小写 strtolower
	$str2 = "HELLOWORLD";
	echo strtolower($str2);
	echo "<br>";

	# 将每个单词首字母大写 ucwords
	$str3 = "hello world my say";
	echo ucwords($str3);
	echo "<br>";

	# 替换所有匹配的内容  str_replace
	$text = "Hello World";
	$output4 = str_replace("World", "everybody", $text);
	echo $output4;
	echo "<br>";

	# 判断是否是字符串  is_string
	$val = "22";
	$output5 = is_string($val);
	echo $output5;
		//是字符串时打印为1,不是字符串不打印
	echo "<br>";

	# 过滤掉数组中非字符串的值
	$values = array(true,false,"Hello",32,23,"111",",",0);
	foreach($values as $value){
		#判断Value是否是字符串,如果是,那么输出!
		if (is_string($value)) {
			echo $value." is a string!<br>";
		}
	}
	echo "<br>";

	# 压缩字符串  gzcompress
	$string = "一大堆文字";
	$compressed = gzcompress($string);
	echo $compressed;
	echo "<br>";
	# 解压字符串
	$uncompressed = gzuncompress($compressed);
	echo $uncompressed;
?>



