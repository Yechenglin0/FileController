<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>rename</title>
</head>
<body>

<form action="?c=Rename&a=rename&oldName=<?php echo ($fileName); ?>&path=<?php echo ($path); ?>" method="post">
	<input type="text" name="newName" placeholder="在这输入新名称">
	<input type="submit" >
</form>
</body>
</html>