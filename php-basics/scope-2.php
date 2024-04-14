<?php
// how to access global variables in functions

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
