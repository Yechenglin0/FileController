<?php
namespace Home\Controller;
use Think\Controller;
class RenameController extends Controller {
	public function index()
	{
		$path = $_GET['path'];
		$fileName = $_GET['fileName'];

		$this->assign('path',$path);
		$this->assign('fileName',$fileName);
		$this->display('Rename');
	}
	public function rename()
	{
		$newName = $_POST['newName'];
		$oldName = $_GET['oldName'];
		$path = $_GET['path'];

		$oldName = $path.'/'.$oldName;
		$newName = $path.'/'.$newName;

		if(rename($oldName, $newName)){
			echo "更改成功";
		} else {
			echo "<script>alert(\"更改失败！\");history.go(-1);</script>";
		};
		$meurl = $_SERVER['PHP_SELF'];
		// echo $meurl;
		echo '<a href="'.$meurl.'">返回首页</a>';
	}
}