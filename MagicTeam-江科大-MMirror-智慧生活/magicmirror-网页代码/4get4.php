<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css"></style>
	<script type="text/javascript"></script>
</head>
<body>
	<form  action="4get_2.php"  method="get" >
		项目1： <input type="text"   name="uName"   />
		项目2： <input type="password"   name="uPswd"   />
		项目3： <input type="text"   name="age"   />
		<br />
		爱好：
			<input type="checkbox" name="hobby[]" value="足球" />足球
			<input type="checkbox" name="hobby[]" value="篮球" />篮球
			<input type="checkbox" name="hobby[]" value="中国足球" />中国足球
		<br />
		<input type="submit"  value="提交"  />
	</form>
	<hr />
	<a  href="4get_2.php?uName=test1&amp;uPswd=123"  > 文字。。。</a>
	<?php
	session_start();
	echo $_SESSION['views'];
	?>
</body>
</html>
