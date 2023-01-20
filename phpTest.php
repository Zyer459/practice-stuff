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
  PHP - Looping Through the Values
  You can also loop through the values with a foreach() loop:
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
/** Example: This example shows how to loop through the values of a PHP object */

$age = array ("Peter" => 35, "Ben" => 37, "Joe" => 41);
$json_obj = json_encode ($age); // encode & set the json obj to a variable
$obj = json_decode($json_obj); // decodes as obj

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

/**This example shows how to loop through the values of a PHP associative array: */

$arr = json_decode($json_obj, true); // decodes as associative array

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}

?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->