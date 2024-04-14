<?php
// let us learn about functions in php

function sum($x)
{
    $add=0;
    foreach($x as $v)
    {
        $add+=$v;
    }
    return $add;
}

$y=array(89,92,12,75,60,56);
$r=array(43,5,4332,2323,3,3);
$addition=sum($y)."<br>";
echo $addition;
echo sum($r);
