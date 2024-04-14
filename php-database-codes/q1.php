<?php
/*
 q1. Write a program which reads the content of a file until '.' has been encountered. 
*/

$fptr=fopen("myfile.txt", "r");

while($a=fgetc($fptr)){
    echo $a;
    if($a=="."){
        break;
    }
}
fclose($fptr);
