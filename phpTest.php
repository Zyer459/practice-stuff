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

/**the scope of variable is the part of the script the variables can be referenced/used
 * these are local, global & static
 * Global variable is declared OUTSIDE a function & can only be accessed outside the function
 * Local variable is declared INSIDE/WITHIN a function & can only be accessed within the function
 * 
 * PHP GLOBAL KEYWORD: the (global) keyword is used to access a global variable from within a function, 
 * to do this: use global keyword before the variables within the function
 * EXAMPLE: 
 */

/***/
$x = 5;
$y = 6;

function myTest() {
    /*global $x, $y;
    $y = $x + $y;
    echo ($y);
    Rewritten the code below with $GLOBAL[index]*/
    
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
myTest();
echo ($y); // putting the function in the echo function doesn't work if the function doesn't return anything
?>
</html>

<!-- php also stores all global variables in an array called $GLOBALS[index]
     the index holds the name of the variable 
     this array is also available from within functions & can be used to update global variables directly
-->

<!-- 
-->

<!-- 
-->