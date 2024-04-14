<?php
// scope and local/global variables

$a=97;
$b=34; //global variables

function process()
{
    $a=56; //local variables
    $b=92;
    echo $a." ".$b;
}

echo $a;
echo "<br>";

process();
