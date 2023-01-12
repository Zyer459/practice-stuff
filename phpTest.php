<!--  PHP CONSTANTS: 
            constants are like variables except once defined
            they cannot be changed, redefined or undefined

            in php:
            A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
            A valid constant name starts with a letter or underscore (no $ sign before the constant name).
            Unlike variables, constants are automatically global across the entire script.

            in php constants are automatically global & can be used across the entire script
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
/**EXAMPLE: this example uses a constant inside a function, even if it is defined outside the function */

define("greeting", "hello world"); //define the constant outside the function

function greet () {
    echo greeting; //use constant inside the function
}

greet(); //call the function

?>
</html>

<!-- 
    note: see the official documentation on constants -> https://www.php.net/manual/en/language.constants.php
    can use the const keyword to create not just array constants
-->

<!-- 
-->

<!-- 
-->