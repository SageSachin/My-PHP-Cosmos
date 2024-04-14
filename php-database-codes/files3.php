<?php
$fptr=fopen("myfile.txt", "r");
echo fgets($fptr); // fgets() reads only one line at one time from txt file.
echo fgets($fptr);
echo "<br>";
