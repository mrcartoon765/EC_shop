<?php 
$Bost_file_dir = debug_backtrace();
$Bost_name = explode('/',$Bost_file_dir[0]["file"]);
$Bost_dir_no = strval(array_slice($Bost_name,-2,1)[0]);

var_dump($Bost_file_dir);
echo "<br><br>";
var_dump($Bost_name);
echo "<br><br>";
var_dump($Bost_dir_no);
echo "<br><br>";
var_dump($Bost_name[$Bost_dir_no]);
echo "<br><br>";
echo $class_dir;



// Bootstrap側
?>