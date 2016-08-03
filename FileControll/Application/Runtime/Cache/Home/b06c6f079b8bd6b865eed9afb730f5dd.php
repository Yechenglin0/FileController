<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>NewFile</title>
</head>
<body>
<form action="?c=NewFolder&a=creatFolder&path=<?php echo ($path); ?>" method="post">
	<input type="text" name="folderName">
	<input type="submit" name="新建文件夹">
</form>
</body>
</html>