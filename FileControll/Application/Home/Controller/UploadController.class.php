<?php
namespace Home\Controller;
use Think\Controller;
class UploadController extends Controller {
	public function index($path)
	{
		$this->assign('path',$path);
		$this->display('Upload');
	}
	public function upload($path)
	{
		echo $path;
		$upload = new \Think\Upload();// 实例化上传类
	    $upload->maxSize   =     3145728 ;// 设置附件上传大小
	    $upload->rootPath  =     $path; // 设置附件上传根目录
	    // $upload->savePath  =     ''; // 设置附件上传（子）目录
	    $upload->saveName = '';
	    $upload->saveRule = '';
	    // $upload->subType = 'hash';
	    // $upload->autoSub = 'false';
	    // 上传文件 
	    $info   =   $upload->uploadOne($_FILES['file']);
	    if(!$info) {
	        $this->error($upload->getError());
	    }else{
	    	$meurl = $_SERVER['PHP_SELF'];
			echo "<script>alert(\"上传成功！即将返回首页\");top.location='".$meurl."'; </script>";
	    }

	}
}