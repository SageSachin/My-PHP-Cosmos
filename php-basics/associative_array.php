<?php
// to demonstrate associative array
$clr=array("r"=>"Red","b"=>"Blue","g"=>"Green","y"=>"Yellow");
echo $clr["r"]."<br>";
echo $clr["b"]."<br>";
echo $clr["g"]."<br>";
echo $clr["y"]."<br>";

echo "<br>";

// to print values in associative array using foreach()
foreach($clr as $key => $value )
{
    echo $key.": ".$value."<br>";
}
