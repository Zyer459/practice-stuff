<!--  
PHP ADVANCED: PHP CALLBACK -> A callback function (often referred to as just "callback")
    is a function which is passed as an argument into another function.
    Any existing function can be used as a callback function.
    To use a function as a callback function,
    pass a string containing the name of the function as the argument of another function

-->
<!-- 
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
/** Pass a callback to PHP's array_map() function to calculate the length of every string in an array*/

function my_callback($item) {
  return strlen($item);
}

$strings = ["apple", "orange", "banana", "coconut"];
$lengths = array_map("my_callback", $strings);// for JS it("my_callback") would be as -> my_callback()
print_r($lengths);
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