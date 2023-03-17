<?php 

$path = $_SERVER['DOCUMENT_ROOT'].'/img';

$files=array();
	  	
		random=rand(0,count($files));
	}
	closedir($handle);
	$url="./img/$files[$random]";
  	header("Location: $url");
}
?>
