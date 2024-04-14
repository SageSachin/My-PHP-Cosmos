<?php

$multiA=array(array(2,4,6,9),
              array(8,9,7,5),
              array(9,3,4,9)
            );

echo $multiA[1][2];
echo "<br>";
echo "<br>";

// for ($i=0; $i < count($multiA); $i++) 
// { 
//     echo var_dump($multiA[$i])."<br>";
// }

for ($i=0; $i < count($multiA); $i++) { 
    for ($j=0; $j< count($multiA[$i]) ; $j++) 
    { 
        echo $multiA[$i][$j]." ";
    }
    echo "<br>";
}
