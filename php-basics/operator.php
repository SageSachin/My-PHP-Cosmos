<?php
/*
Operators in php
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

$a=4;
$b=2;

// 1. Arithmetic Operator
echo "For $a + $b, the result will be: " . ($a + $b) . "<br>";
echo "For $a - $b, the result will be: " . ($a - $b) . "<br>";
echo "For $a * $b, the result will be: " . ($a * $b) . "<br>";
echo "For $a / $b, the result will be: " . ($a / $b) . "<br>";
echo "For $a % $b, the result will be: " . ($a % $b) . "<br>";
echo "For $a ** $b, the result will be: " . ($a ** $b) . "<br>";
echo "<br>";

// 2. Assignment Operator 
echo "For $a += $b, the result will be: " . ($a += $b) . "<br>";
echo "For $a -= $b, the result will be: " . ($a -= $b) . "<br>";
echo "For $a *= $b, the result will be: " . ($a *= $b) . "<br>";
echo "For $a /= $b, the result will be: " . ($a /= $b) . "<br>";
echo "For $a %= $b, the result will be: " . ($a %= $b) . "<br>";
echo "For $a **= $b, the result will be: " . ($a **= $b) . "<br>";
echo "<br>";

// 3. Comparison Operators
$a=4;
echo "For $a > $b, the result will be: ";
echo var_dump($a > $b) . "<br>";
echo "For $a < $b, the result will be: ";
echo var_dump($a < $b) . "<br>";
echo "For $a >= $b, the result will be: ";
echo var_dump($a >= $b) . "<br>";
echo "For $a <= $b, the result will be: ";
echo var_dump($a <= $b) . "<br>";
echo "For $a <> $b, the result will be: ";
echo var_dump($a <> $b) . "<br>";
echo "<br>";

// 4.Logical Operators
$x=true;
$y=false;
echo "<br>";

echo "For x and y, the result will be: ";
echo var_dump($x and $y)."<br>";
echo var_dump($x && $y)."<br>";

echo "For x or y, the result will be: ";
echo var_dump($x or $y)."<br>";
echo var_dump($x || $y)."<br>"; 
// error never comes if u dont put ">" in "<br"

echo "For !x, the result will be: ";
echo var_dump(!$x)."<br>";
