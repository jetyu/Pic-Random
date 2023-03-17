<?php 

$path = $_SERVER['DOCUMENT_ROOT'].'/img';

$files=array();
$random=rand(0,count($files));
$url="./img/$files[$random]";
("Location: $url");
}
?>
