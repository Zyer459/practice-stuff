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
/**echo statement can be used with or without parentheses > () 
 * display text or HTML: 
 * the following shows how to display text and HTML markup
*/
echo "<h2>PHP is Fun!</h2>";//HTML
echo "Hello world!<br>";//text + HTML
echo "I'm about to learn PHP!<br>";//text
echo "This ", "string ", "was ", "made ", "with multiple parameters.";

/**display values: 
 * The following example shows how to output text and variables with the echo statement:
 */
$txt1 = "Hello";
$user = "Zyer459";
$txt2 = "welcome back";

$x = 5;
$y = 4;

echo "<h2> " .$txt1. " " .$user. ", " .$txt2. "</h2>";// use . to join variables with variables/text/HTML
echo "How are you?", "<br/>";
echo "z = " .$x + $y;
?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->