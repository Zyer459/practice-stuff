<!--  
PHP ADVANCED: PHP CALLBACK -> A callback function (often referred to as just "callback")
    is a function which is passed as an argument into another function.
    Any existing function can be used as a callback function.
    To use a function as a callback function,
    pass a string containing the name of the function as the argument of another function
-->

<!-- 
  Callbacks in User Defined Functions
     User-defined functions and methods can also take callback functions as arguments.
     To use callback functions inside a user-defined function or method,
     call it by adding parentheses to the variable and pass arguments as with normal functions
-->

<!--
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
<?php
/** Example: Run a callback from a user-defined function*/

function exclaim($str) {
  return $str . "! ";
}

function ask($str) {
  return $str . "? ";
}

function printFormatted($str, $format) {
  // Calling the $format callback function
  echo $format($str);
}

// Pass "exclaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
printFormatted("Hello world", "ask");

?>
</body>
</html>

<!-- 
  unlike JS  in PHP a callback is passed in argument as a string name of the function 
-->

<!-- 
  Starting with version 7, PHP can pass anonymous functions as callback functions
  for example:
    $strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map( function($item) { return strlen($item); } , $strings);
print_r($lengths);
-->

<!-- 
-->