<?php
$name="Sachin is Monster laalala";
echo $name;
echo "<br>";
echo $name;
echo "<br>";

$a1="Hello";
$a2="World!";
echo $a1." ".$a2;
echo "<br>";

//word count
echo "Word Count: ";
echo str_word_count($name);

//word reverse
echo "<br>";
$n="Pratham";
echo "String is: $n"."<br>";
echo "Reversed String is: ";
echo strrev($n);

//Word Position
echo "<br>";
$b="Sonam lives in balia";
echo strpos($b, "lives");

//Word Replace
echo "<br>";
$x="Saurabh wants to gift someone a Truck";
echo $x."<br>";
echo str_replace("Truck","Ring",$x);

//Word repeat
echo "<br>";
$a="Jack and Jill went up the Hill 🌊";
echo str_repeat($a,4);

//Trim
echo "<br>";
echo "<pre>"; 
// The text will be displayed exactly as written in the HTML source code.
echo rtrim("<pre>    Almight is BAdass     </pre>");
echo "<br>";
echo ltrim("    Almight is BAdass     ");
echo "</pre>";

//Capital and Small
$f="Saurabh Is Going To Shop";
echo "Original Text: ".$f;
echo "<br>";
echo strtolower($f);
echo "<br>";
echo strtoupper($f);
echo "<br>";
$d="<pre>     HELLO</pre>";
echo $d;

//about var_dump
$q="Shinchan";
echo var_dump($q);
