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
/**Arithmetic operators -> add(+) sub(-) divide(/) multiply(*) mod(%) exponent(**)
 * 
 * Assignment operators(or syntactic sugar except '=' ) -> 
 * assign the right side to left side (=),
 * 1st add the left to right side then assign the result to the left side (+=),
 * 1st subtract the right from left then assign the result to the left side (-=),
 * 1st divide the left by right then assign the result to the left side (/=),
 * 1st multiply the left with right then assign the result to the left side (*=),
 * 1st divide the left by right then assign the REMAINDER to the left side (%=),
 * 
 * Comparison operators: Equal (== /true for same value), identical (=== /true for same value & type)
 * not equal (!= or <>) true if 2 values are not equal, not identical (!==)
 * greater than (>), less than (<)
 * greater than or equal (>=), less than or equal (<=)
 * spaceship (<=>) returns an integer less than, equal to or greater than zero
 * depending on -> if left side is less than, equal to or greater than right side (PHP 7)
 * 
 * PHP Increment / Decrement Operators: pre & post-increment (++$x / $x++)
 * pre & post-decrement ($--x / $x--)
 * 
 * php logical operators: AND (and / &&), OR (or / ||), NOT (!), XOR (xor / either of the 2 values is true and not both true at once)
 * 
 * php string operators: Concatenation (.), Concatenation assignment (.=)
 */

 /**example for spaceship */
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  
</html>

<!-- 
    
-->

<!-- 
-->

<!-- 
-->