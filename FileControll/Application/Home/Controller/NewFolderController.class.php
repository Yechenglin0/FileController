<?php
namespace Home\Controller;
use Think\Controller;
class NewFolderController extends Controller
{
	public function index($path)
	{
		echo $path;
		$this->assign('path',$path);
		$this->display('NewFolder');
	}
	public function creatFolder($path)
	{
		
		$folderName = $_POST['folderName'];
		echo $folderName."<br>";
		echo $path;

		if (!is_dir($path.'/'.$folderName)) {
			mkdir($path.'/'.$folderName);
			if (!is_dir($path.'/'.$folderName)){
				echo "<script>alert(\"创建成功\");</script>";
			}
			
		} else {
			echo "<script>alert(\"文件夹已存在！\");history.go(-1);</script>";
		}
		
	}
}