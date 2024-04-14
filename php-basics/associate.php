<?php
// associative array

$favcol=array("Utkarsh"=>"Red","Pratham"=>"Yellow","Saurabh"=>"Black");

// echo $favcol["Pratham"];

foreach($favcol as $x => $y)
{
    echo "Favourite Color of $x is $y <br>";
}
