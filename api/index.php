<? php

$path = $_SERVER['DOCUMENT_ROOT'].'/img';
$files = array();
if ($handle = opendir("$path")) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != "..") {
            if (substr($file, -3) == 'png' || substr($file, -3) == 'jpg') $files[count($files)] = $file; 
        }
        $random = rand(0, count($files) - 1);
    }
    closedir($handle);
    $url = "./img/$files[$random]";
    header("Location: $url");
} 
?>