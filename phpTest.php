<!--  PHP GLOBAL VARIABLES-SUPER GLOBAL:
                SUPER GLOBALS are per-defined php varibles that are always available in all scopes
                they are as follows:
                $GLOBALS
                $_SERVER
                $_REQUEST
                $_POST
                $_GET
                $_FILES
                $_ENV
                $_COOKIE
                $_SESSION

                PHP $GLOBALS: $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script 
                (also from within functions or methods).
                PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

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
/**EXAMPLE: below is an example of $GLOBALS*/

$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];// the names are in string
}
 
addition();
echo $z;

?>  
</html>

<!-- 
    In the example above, since z is a variable present within the $GLOBALS array, it is also accessible from outside the function!
-->

<!-- 
-->

<!-- 
-->