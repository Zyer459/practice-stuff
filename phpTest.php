<!--  PHP ARRAYS:
                in php arrays are created using the array() function
                there are 3 types of arrays in php these are :

                Associative arrays - Arrays with named keys: the arrays that use named keys assigned to them are called associative arrays
                there are 2 ways to create an associative array

                1) $age = array ("Name1" => "25", "Name2" => "35", "Name3" => "22"); the numbers here are strings

                2) $age["Name1"] = "25";
                   $age["Name2"] = "35";
                   $age["Name3"] = "22";


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
/**EXAMPLE: using the 1st method*/

$age = array ("Peter" => 25, "John" => 35, "Jake" => 22); // I changed the numbers from strings to integer data type

echo "Jake is " .$age["Jake"]. " years old";
echo "<br>";

/**Looping through an associative array: use foreach loop*/
$age2["A"] = "25"; // kept the numbers as strings
$age2["B"] = "35";
$age2["C"] = "22";

foreach ($age2 as $i => $i_value) {
    echo "Key = " .$i. ", value = " .$i_value;
    echo "<br>";
}

?>  
</html>

<!-- 
    using arrays in strings need the period ( . )
    syntax of foreach() loop: 

        foreach ($array as $value) {
            code to be executed;
        }

        works only on arrays, used to loop through each key/value pair in associative array
-->

<!-- 
-->

<!-- 
-->