<!--  PHP NUMBERS: 
      php provides automatic data type conversion.
      if you assign an integer to a variable, the type of the variable wiil automatically be integer.
      if you again assign a string to that variable it will be a string data type.
      this automatic conversion although useful, it can sometimes break the code.

      php numerical strings -> 
      the php is_numeric() function can be used to find whether a variable is numeric.
      it returns true/false
      the function returns true if the variable is a number or numeric string
      false otherwise
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

$x = 5985;
var_dump (is_numeric(($x))); //returns true

$x = "5985";
var_dump(is_numeric($x)); //returns true

$x = "59.85" + 100;
var_dump(is_numeric($x)); //returns true

$x = "Hello";
var_dump(is_numeric($x)); //returns false


?>
</html>

<!--
    Note: From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), 
    as they are no longer considered as numeric strings.
-->

<!-- 
-->

<!-- 
-->