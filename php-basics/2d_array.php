<?php
$multi=array(array(1,2,3),
             array(4,5,6),
             array(7,8,9)
            ); 
// echo $multi[1][1];

for ($i=0; $i < count($multi); $i++) { 
    for ($j=0; $j < count($multi[$i]); $j++) { 
        echo $multi[$i][$j]." ";
    }
    echo "<br>";
}
