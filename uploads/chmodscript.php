#!/usr/bin/php
<?php
$fileName = glob("*.glb");
$file = $fileName[0];
chmod($file,0777); 
?>
