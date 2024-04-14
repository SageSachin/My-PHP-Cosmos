<?php
// Appending to a file in php.
$fptr=fopen("myfile3.txt", "a");
fwrite($fptr, "This is a txt file to demonstarte how append operation works on php.");
fwrite($fptr, "This is another content btw.");
fclose($fptr);
