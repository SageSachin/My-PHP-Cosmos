<?php
// about $GLOBAL[] 

$a=97;
$b=34;

function process()
{
    global $a;
    global $b;
    echo $a." ".$b;
}

echo $a;
echo "<br>";

process();
echo "<br>";

/*
$GLOBALS is a PHP super global variable which is used to access global 
variables from anywhere in the PHP script 
(also from within functions or methods).
*/

echo $GLOBALS["a"]." ";
echo $GLOBALS["b"];
