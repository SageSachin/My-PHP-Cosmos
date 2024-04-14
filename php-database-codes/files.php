<?php
$a=readfile('myfile.txt'); // it also prints no. of characters read at the end of the output.

echo $a;

echo "<br>";

readfile('myfile.txt'); // it simply prints whats there in the txt file.
