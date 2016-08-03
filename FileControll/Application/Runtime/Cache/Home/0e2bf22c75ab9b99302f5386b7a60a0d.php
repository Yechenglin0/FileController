<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form action="?c=Edit&a=save&file=<?php echo ($file); ?>" method="post">
	<textarea  rows='48' cols="108" name="Edit"><?php echo ($contents); ?></textarea>
	<input type="submit" value="修改">
</form>

</body>
</html>