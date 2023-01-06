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

/** The static keyword 
 * normally after a function is completed/executed, all of its variables are deleted.
 * However, we might want to keep the local variables for further use
 * to do this use the static keyword when you 1st declare a local variable
 */

 function myTest () {
    static $x = 0;
    echo ($x);
    $x++;
 }
 myTest();
 echo "<br>"; // write HTML code as strings
 myTest();
 echo "<br>"; // this creates a new line break
 myTest();
 echo "<br>";

 /**here everytime the function is called, the variable will keep its previous value from the last function
  * to test it remove the static keyword from the variable to see its effect
  */
?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->