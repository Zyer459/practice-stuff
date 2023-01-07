<!--  PHP NUMBERS: 
      php provides automatic data type conversion.
      if you assign an integer to a variable, the type of the variable wiil automatically be integer.
      if you again assign a string to that variable it will be a string data type.
      this automatic conversion although useful, it can sometimes break the code.

      php has the following predefined constants for integers:
        PHP_INT_MAX - The largest integer supported
        PHP_INT_MIN - The smallest integer supported
        PHP_INT_SIZE - The size of an integer in bytes (memory allocation of the integer)

      php has the following functions to check if the type of a variable is integer or not:
        is_int()
        is_integer() -> alias of is_int()
        is_long() -> alias of is_int()
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

$x = 5596;
var_dump(is_int($x));// returns true
echo("</br>");

$x = 55.96;
var_dump(is_int($x));// returns false
?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->