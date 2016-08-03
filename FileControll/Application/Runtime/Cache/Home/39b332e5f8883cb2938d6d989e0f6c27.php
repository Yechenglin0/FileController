<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>home</title>
</head>
<body>
<table border="1">
	<?php echo ($contentA); ?>
	<?php echo ($contentB); ?>
</table>
<a href="<?php echo ($meurl); ?>index.php?c=NewFolder&path=<?php echo ($path); ?>">新建文件夹</a>
<a href="<?php echo ($meurl); ?>index.php?c=Upload&path=<?php echo ($path); ?>">上传文件</a>
</body>
</html>