<!--  
PHP ADVANCED: PHP JSON -> JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
              PHP has some built-in functions to handle JSON.
              First, we will look at the following two functions:
              json_encode()
              json_decode()
-->

<!-- 
  json_encode() is used to encode a value to JSON format
-->

<!--
  PHP - Accessing the Decoded Values: 
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
/** Example: This example shows how to access the values from a PHP associative array:*/

$age = array ("Peter" => 35, "Ben" => 37, "Joe" => 41);
$json_obj = json_encode ($age); // encode & set the json obj to a variable
$arr = json_decode($json_obj, true); // decode

echo $arr ["Peter"];
echo "<br>";

echo $arr ["Ben"];
echo "<br>";

echo $arr ["Joe"];

?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->