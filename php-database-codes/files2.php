<?php
$fptr=fopen("myfile.txt", "r");
echo $fptr."<br>";

$content=fread($fptr, filesize("myfile.txt"));
echo $content;

fclose($fptr); // to close file and free CPU and RAM from file resources.
