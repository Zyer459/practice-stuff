<!--  PHP NUMBERS: 
      php provides automatic data type conversion.
      if you assign an integer to a variable, the type of the variable wiil automatically be integer.
      if you again assign a string to that variable it will be a string data type.
      this automatic conversion although useful, it can sometimes break the code.

      PHP Casting Strings and Floats to Integers ->
      Sometimes you need to cast a numerical value into another data type.
      The (int), (integer), or intval() function are often used to convert a value to an integer.
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
/**EXAMPLE: Cast float and string to integer:*/

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
var_dump($int_cast);

echo "</br>";

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
var_dump($int_cast);

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