<!--  PHP NUMBERS: 
      php provides automatic data type conversion.
      if you assign an integer to a variable, the type of the variable wiil automatically be integer.
      if you again assign a string to that variable it will be a string data type.
      this automatic conversion although useful, it can sometimes break the code.

      php has the following predefined constants for floats (from PHP 7.2):
        PHP_FLOAT_MAX - The largest representable floating point number
        PHP_FLOAT_MIN - The smallest representable positive floating point number
        PHP_FLOAT_MAX - The smallest representable negative floating point number
        PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
        PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
        

      php has the following functions to check if the type of a variable is float or not:
        is_float()
        is_double() -> alias of is_float()
        
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

/*$x = 5596;
var_dump(is_int($x));// returns true
echo("</br>");*/

$x = 55.96;
var_dump(is_int($x));// returns false-> because its a float see below
echo("</br>");

var_dump(is_float($x));// returns true


?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->