<?php 
$path = $_SERVER['DOCUMENT_ROOT'].'/album';
$files=array();
if ($handle=opendir("$path")) {
while(false !== ($file = readdir($handle))) {
if ($file != "." && $file != "..") {
if(substr($file,-3)=='png' || substr($file,-3)=='jpg' || substr($file,-4)=='webp') $files[count($files)] = $file;//带后缀筛选的文件数组
}
$random=rand(0,count($files)-1);
}
closedir($handle);
$url="./album/$files[$random]";
header("Location: $url");//302
}
?>
