<!-- with php there are 2 basic ways to get outputs echo & print
they are almost the same, both are used for output 
only few small differences: 
    
    echo has no return value and, 
    print has a return value of 1 & can be used in expressions.
    echo can take multiple parameters (arguments), while print takes only 1 argument.
    echo is marginally faster than print
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
/**print is similar to echo statement
 * display text: 
 */
print "<h2> Yay! PHP is fun </h2>";
print "Hello world </br>";
print "I'm learning php";

/**display variables: */

$txt1 = "Het there, ";
$txt2 = "welcome back";
$user = "Zyer459";
print "<h2> " .$txt1. $user. $txt2. "</h2>";

$x = 8;
$y = 4;
print $x + $y;

?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->