<?php
$fptr=fopen("myfile.txt", "r");
echo fgetc($fptr); 
// fgetc() reads only one character at one time from txt file.
echo fgetc($fptr);
