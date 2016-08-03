<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
</head>
<body>
	<form action="?c=Upload&a=upload&path=<?php echo ($path); ?>" method="post" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit">
	</form>
</body>
</html>