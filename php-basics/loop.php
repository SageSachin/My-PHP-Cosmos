<?php
// if else statement
$a=665;
$b=4;

if($a > $b)
{
    echo "a is greater than b";
}
else
{
    echo "a is lesser than b";
}
// for single line statement
echo "<br>";
if($a<$b)
echo "True";
echo "False";

// if elseif ladder
echo "<br>";
if($a > $b)
{
    echo "a is greater than b";
}
elseif($a < $b)
{
    echo "a is lesser than b";
}
else
{
    echo "Invalid";
}

// if if elseif ladder
echo "<br>";
if($a > $b)
{
    echo "a is greater than b"."<br>";
}
elseif($a < $b)
{
    echo "a is lesser than bog"."<br>";
}
if($a > $b) // out side the if elseif ladder
{
    echo "a is lesser than dog"."<br>";
}
