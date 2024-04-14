<?php
// Writing to a file in php.
$fptr=fopen("myfile2.txt", "w");
fwrite($fptr, "This is a txt file to demonstarte how write operation works on php.");
fwrite($fptr, "This is another content.");
fclose($fptr);
