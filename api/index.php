<?php 

$path = $_SERVER['DOCUMENT_ROOT'].'/img';

$files=array();
if ($handle=opendir("$path")) {
	while(false !== ($file = readdir($handle))) {
		if ($file != "." && $file != "..") {
			if(substr($file,-3)=='png' || substr($file,-3)=='jpg' || substr($file,-4)=='webp') $files[count($files)] = $file;
		
		}
		$random=mt_rand(0,count($files));
	}
	closedir($handle);
	$url="./img/$files[$random]";
  	header("Location: $url");
}
?>
