<!--  PHP FUNCTIONS: 
                    user defined function syntax: 

                    function functionName () {
                        some code;
                    }

                    it looks same as javascript in php functionNames are not case-sensitive but its good to keep it as case-sensitive
                    php is loosely typed language so php automatically associates data type to variables, depending on its value
                    you can do things like adding a string to an integer without causing an error.

                    In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function,
                    and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
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
/**EXAMPLE: In the following example we try to send both a number and a string to the function without using strict & add types declarations to variables:*/

function addNumbers (int $a, int $b) {
    return $a + $b;
}

echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>  
</html>

<!-- 
    
-->

<!-- 
-->

<!-- 
-->