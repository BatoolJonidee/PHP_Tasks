<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Hello World!\n";
fwrite($myfile, $txt);
$txt = "files in php \n";
fwrite($myfile, $txt);
fclose($myfile);
$myfileread = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fread($myfileread,filesize("newfile.txt"));
fclose($myfileread);
?>