<!--  PHP NUMBERS: 
      php provides automatic data type conversion.
      if you assign an integer to a variable, the type of the variable wiil automatically be integer.
      if you again assign a string to that variable it will be a string data type.
      this automatic conversion although useful, it can sometimes break the code.

      A numeric value larger than PHP_FLOAT_MAX is considered infinite.
        
        

      php has the following functions to check if a numeric value is infinite or not:
        is_finite()
        is_infinite()

        however, 
        the php var_dump() returns the data type & value      
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

$x = 1.9e411;
var_dump($x);// (INF) means its an infinite number

echo("</br>");

var_dump(is_finite($x));// returns false

echo("</br>");

var_dump(is_infinite($x));// returns true

?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->