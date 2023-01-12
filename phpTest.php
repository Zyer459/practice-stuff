<!--  PHP OPERATORS: 
            php divides operators into following groups:
            *Arithmetic operators
            *Assignment operators
            *Comparison operators
            *Increment/Decrement operators
            *Logical operators
            *String operators
            *Array operators* -> used to compare arrays
            *Conditional assignment operators*
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php document</title>
</head>
<body>
    <h1> Below is some php code</h1>
</body>

<?php
/**EXAMPLE: */
/**Array operators -> 
 * Union (+) -> union of arrays
 * Equality (==) -> returns true if arrays have same key/value pairs
 * Identity (===) -> returns true if arrays have same key/value pairs, in the same order & of the same type
 * Ineqaulity (!= or <>) returns if arrays are not equal
 * Non-identity (!==) returns true if arrays are not identical to each other
 */

$x = array ("a" => "red", "b" => "blue");
$y = array ("c" => "green", "d" => "yellow");

print_r($x + $y); //union of x & y arrays
echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y); //returns false
echo"<br>";

$x = array("a" => "red", "a" => "red");  
$y = array("a" => "red", "a" => "red");  

var_dump($x == $y); //returns true
echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y); //returns false
echo"<br>";

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y); //returns true
?>  
</html>

<!-- 
    above are some array operator examples
-->

<!-- 
-->

<!-- 
-->