<?php
namespace Home\Controller;
use Think\Controller;
class EditController extends Controller
{
	public function index()
	{
		$meurl = preg_replace('/index.php/i','',$_SERVER['PHP_SELF']);
		$path = substr($_GET['path'], 2);
		$fileName = $_GET['fileName'];
		echo "meurl=".$meurl."<br>";
		echo "path=".$path."<br>";
		echo $_GET['fileName']."<br>";
		if($path != '')
			$url = 'http://localhost'.$meurl.$path.'/'.$fileName;
		else
			$url = 'http://localhost'.$meurl.$path.$fileName;
		echo $url."<br>";
		$contents = $this->getContent($url);
		$file = $path.'/'.$fileName;
		echo $file;
		$this->assign('file',$file);
		$this->assign('contents',$contents);
		$this->display('Edit');
		
	}
	public function getContent($url)
	{
		$content = file_get_contents($url);
		 return $content;   
	}	
	public function save()
	{
		$Edit = $_POST['Edit'];
		$file = $_GET['file'];
		echo $file;
		echo $Edit;
		if(file_put_contents($file,$Edit))
		{
			echo "success";
		} else {
			echo "error";
		}
	}
}

?>