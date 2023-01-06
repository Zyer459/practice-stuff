<!--  PHP STRINGS:
      some commonly used functions to manipulate strings in php

      1) strlen(): takes a string or variable with string as value & returns the length of string.
      2) str_word_count(): returns the number of WORDS (caution: not letters!) in a string.
      3) strrev(): reverses a string.
      4) strpos(): searches for a specific text in a string of texts & 
      returns the position of the 1st letter of the 1st occurrence of the required text.
      5) str_replace(): replaces some characters with some other characters in a string. Takes 3 arguments (to be replaced, replace with, string)


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
/**EXAMPLES:  */
echo strlen ("Hello world!@#"); //counts alpha-numeric puncuation & special characters
echo "</br>";
echo "</br>";
echo str_word_count("Hello world!"); //outputs 2
echo "</br>";
echo "</br>";
echo strrev("Hello, world!");
echo "</br>";
echo "</br>";
echo strpos("Hello, world", "ld");//outputs 10
echo "</br>";
echo "</br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly! instead of Hello world!
?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->