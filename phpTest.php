<!--  PHP MATH: 
            php has a set of math functions that allows to perform mathematical tasks on numbers
            such as the pi function
            echo (pi()) returns the value of pi
            the min() & the max() returns the finds the lowest/highest value in a list of arguments
            the abs(), the absolute function returns the absolute value of a number
            the sqrt() returns the square root of a number
            the pow(), raises the 1st argument to the power of its 2nd argument
            round(), rounds a number to its CLOSEST integer
            ceil(), rounds a number UP to an integer
            floor(), rounds a number DOWN to an integer
            rand(), generates a random number
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
/**EXAMPLE: */

echo (pi()); // returns pi value
echo "<br>";

echo (max(1264, 468.4, 99.552)); // returns the highest value
echo "<br>";

echo (min(1264, 468.4, 99.552)); // returns the lowest value
echo "<br>";

echo (abs(-25.4)); // returns the absolute value -> 25.4
echo "<br>";

echo (sqrt(256)); // returns 16
echo "<br>";

echo (pow(2, 4)); // returns 16
echo "<br>";

echo (round(7.5)); // returns 8 since its the closest
echo "<br>";
echo (round(7.4)); // returns 7 since its the closest
echo "<br>";

echo (ceil(3.0000000001)); // rounds UP & returns 4
echo "<br>";
echo (floor(3.9595)); // rounds DOWN & returns 3
echo "<br>";

/**below is the rand()
 * To get more control over the random number
 * add the optional min and max parameters to specify the lowest integer and the highest integer to be returned
 * For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100)
 */

echo (rand(10, 100)); // returns a random number between 10 & 100 (including 10 & 100)
echo "<br>";
echo (rand(1, 10)); // returns random number between 1 & 10
?>
</html>

<!--
    
-->

<!-- 
-->

<!-- 
-->