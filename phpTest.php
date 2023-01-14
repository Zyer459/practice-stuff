<!--  PHP ARRAYS:
                in php arrays are created using the array() function
                there are 3 types of arrays in php these are :

                Multidimensional arrays - sometimes you want to store values with more than one key. For this, we have multidimensional arrays.
                A multidimensional array is an array containing one or more arrays.

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
/**EXAMPLE: 2-dimensional arrays is an array of arrays*/

$cars = array (
    array ("Toyota", 22, 18),
    array ("BMW", 5, 10),
    array ("Audi", 3, 15)
);
// the above is an array of car brands and how many stock/sold now print out the data

echo $cars[0][0]. ": In stock: " .$cars[0][1]. ", Sold: " .$cars[0][2];
echo"<br>";
echo $cars[1][0]. ": In stock: " .$cars[1][1]. ", Sold: " .$cars[1][2];
echo"<br>";
echo $cars[2][0]. ": In stock: " .$cars[2][1]. ", Sold: " .$cars[2][2];

// what if there were more arrays like 50 or 300! in that case a loop is useful

echo"<br>";
echo"<br>";
echo"<br>";

/*for ($col = 0; $col < 3; $col++) {
    echo "<p><b>Row number $col</b></p>";
    for ($row = 0; $row < 3; $row++) {
        echo $cars[$row][$col]. ": In stock: " .$cars[$row][1]. ", Sold: " .$cars[$row][2];
    }
} bug*/

?>  
</html>

<!-- 
    using arrays in strings need the period ( . )
-->

<!-- 
    the 2-d array contains 3 arrays & 2 indices: row and column
-->

<!-- 
-->