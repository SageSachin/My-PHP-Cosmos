<?php
// let us learn about functions in php

function add($x,$y)
{
    $sum=0;
    $sum=$x+$y;
    return $sum;
}

$plus=add(8,9);
echo "Sum of given numbers is: $plus"."<br>";

echo add(8,66); // we can also use it directly
