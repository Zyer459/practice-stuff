<!--  PHP CONSTANTS: 
            constants are like variables except once defined
            they cannot be changed, redefined or undefined

            in php:
            A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
            A valid constant name starts with a letter or underscore (no $ sign before the constant name).
            Unlike variables, constants are automatically global across the entire script.

            create a constant:
            use the define() function
            syntax -> define(name, value, case-insensitive)
            name -> specifies the name of the constant (the name must be a string)
            value -> specifies the value of constant (can be any data type)
            case-insensitive -> specifies whether the constant name should be case-insensitive, default is false (it means it is case-sensitive)
            enter boolean values for 3rd parameter
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
/**EXAMPLE: Create a constant with a case-sensitive name:*/

define ("num", 55); // 3rd parameter is set to default which is false, if type echo (nuM) or anything else it throws fatal error
echo (num); // returns the value of num which is 55
echo "<br>";

define("value", true); // warning
echo value; // returns 1 for true & 0 for false
echo "<br>";

define("GREET", "hello world", true);
echo gREET; // should return the string hello world
echo "<br>";
?>
</html>

<!-- very important
    In versions prior to PHP 8.0, it was possible to define case-insensitive constants by passing true as third parameter of the function.
    In PHP 7.3 and 7.4, the ability to define case-insensitive constants is deprecated.
    Since PHP 8.0, defining case-insensitive constants has been removed. (Lindevs)
-->

<!-- 
-->

<!-- 
-->