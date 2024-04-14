<?php
// let us learn about foreach()

/*
$x=array("Banana","Apple","Orange","Kiwi","Mango");

for ($i=0; $i < count($x); $i++) { 
    echo $x[$i]."<br>";
}
*/

$x=array("Banana","Apple","Orange","Kiwi");

foreach($x as $v)
echo "$v <br>";
