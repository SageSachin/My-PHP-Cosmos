<?php
$a=67; // global variables
$b=97;

function process()
{
    global $a,$b;
    echo "The value of a and b is $a , $b";
}

echo $a."<br>";
echo $b."<br>";
process();

echo "<br>";
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
