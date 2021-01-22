<?php 
$Bost_file_dir = debug_backtrace();
$Bost_name = explode('/',$Bost_file_dir[0]["file"]);
$Bost_dir_no = intval((count($Bost_name)))-2;
$class_dir = $Bost_name[$Bost_dir_no];

var_dump($Bost_file_dir);
echo "<br><br>";
var_dump($Bost_name);
echo "<br><br>";
var_dump($Bost_name[$Bost_dir_no]);
echo "<br><br>";
echo $class_dir;



// Bootstrap側
?>