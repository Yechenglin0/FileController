<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index($path = '.'){
		$meurl = $_SERVER['PHP_SELF'];
		$contentA = '';
		$contentB = '';
		$dp = dir($path);
		while($file = $dp->read()) {
			 if($file != '.' && $file != '..') {
			 	$fileName = $file;
	 			$file = $path.'/'.$file;
				// echo $file.'<br>';
				if(is_dir($file)) {
					$contentA .= '<tr>'.
								    '<td>文件夹</td>'.
								    '<td><a href="'.$meurl.'?path='.$file.'">'.$file.'</a></td>'.
								    '<td><a href="http://localhost'.preg_replace('/index.php/i','',$meurl).$file.'" target="_blank">打开</a></td>'.
								    '<td><a href="'.$meurl.'?c=rename&path='.$path.'&fileName='.$fileName.'">重命名</a></td>'.
								  '<tr>'
								 ;
				}
				if(is_file($file)) {
					$contentB .= '<tr>'.
									'<td>文件</td>'.
									'<td>'.$file.'</td>'.
									'<td><a href="'.$meurl.'?c=Edit&&path='.$path.'&fileName='.$fileName.'">编辑</a></td>'.
									'<td><a href="'.$meurl.'?c=rename&path='.$path.'&fileName='.$fileName.'">重命名</a></td>'.
								  '<tr>'
								 ;
				}
	 		}
		}
		$dp->close();
		// echo $path;
		echo preg_replace('/index.php/i','',$meurl);
		$this->assign('path',$path);
		$this->assign('meurl',preg_replace('/index.php/i','',$meurl));
		$this->assign('contentA',$contentA);
		$this->assign('contentB',$contentB);
		$this->display('home');
	}
}

