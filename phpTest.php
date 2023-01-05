<!-- php variables: 
in php the variable starts with $ sign followed by name of the variable-->

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
/*$x = 5;
$y = 9;
$z = $x + $y;
echo ($z);

this outputs sum of 2 variables*/

/**Rules for php variables
 * starts with $ followed by name
 * name must start with a letter or the underscore character
 * names cannot start with numeber
 * only alpha-numeric is used
 * names are case-sensitive
 */

/**OUTPUT VARIABLES */
$greet = "Hello";
$user = "Zyer459";
echo ("Hello " .$user. ", Welcome back!"); // use . before and after variable to use variable values with strings similar to + in JS
?>
</html>

<!-- Note: Unlike other programming languages, 
PHP has no command for declaring a variable. 
It is created the moment you first assign a value to it.
-->

<!-- php is a loosely typed language: 
PHP automatically associates a data type to the variable, depending on its value. 
Since the data types are not set in a strict sense, 
you can do things like adding a string to an integer without causing an error.
-->

<!-- In PHP 7, type declarations were added. This gives an option to specify the data type expected when declaring a function,
and by enabling the strict requirement,
it will throw a "Fatal Error" on a type mismatch.
-->