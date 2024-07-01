<?php
$myfile = fopen("my.txt", "w") or die("Unable to open file!");
echo "File has been created";
$txt = "Hello Rahul Kumar and Suman How are You\n";
fwrite($myfile, $txt);
$txt = "Hello Sushma How are You\n";
fwrite($myfile, $txt);
fclose($myfile);
?>