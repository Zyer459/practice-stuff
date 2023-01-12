<!--  PHP CONSTANTS: 
            constants are like variables except once defined
            they cannot be changed, redefined or undefined

            in php:
            A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
            A valid constant name starts with a letter or underscore (no $ sign before the constant name).
            Unlike variables, constants are automatically global across the entire script.

            create a constant:
            use the define() function -> php 7
            or 
            const keyword

            create an array constant using define() function in php 7
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
/**EXAMPLE: create an array constant*/

define("cars", ["Alfa Romeo","BMW","Toyota"]); // create array const using define()
echo cars[1]; // returns BMW

echo "<br>";

const cars2 = ["Ford","BMW","Toyota"]; // create array const using const keyword
echo cars2[0];
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