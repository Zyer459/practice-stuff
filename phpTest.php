<!--  
PHP ADVANCED: PHP JSON -> JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
              PHP has some built-in functions to handle JSON.
              First, we will look at the following two functions:
              json_encode()
              json_decode()
-->

<!-- 
  json_encode() is used to a value to JSON format
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
/** Example: This example shows how to encode an associative array into a JSON object*/

$age = array ("Peter" => 35, "Ben" => 37, "Joe" => 41);
echo json_encode($age);

echo "<br>";
echo "<br>";

$cars = array ("Audi", "BMW", "Toyota"); // this example encodes an indexed array
echo json_encode($cars);

echo "<br>";
echo "<br>";

$json_obj = json_encode ($age); // set the json obj to a variable
var_dump(json_decode($json_obj)); // decode and show the json obj

/**The json_decode() function returns an object by default.
 * The json_decode() function has a second parameter, and when set to true, JSON objects are decoded into associative arrays
*/

echo "<br>";
echo "<br>";

var_dump(json_decode($json_obj, true)); //this gives an associative array
?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->