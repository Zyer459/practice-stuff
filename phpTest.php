<!--  PHP FUNCTIONS: 
                    user defined function syntax: 

                    function functionName () {
                        some code;
                    }

                    to add return type declarations for the return statement
                    To declare a type for the function return, add a colon ( : )
                    and the type right before the opening curly ( { )bracket when declaring the function.
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
/**EXAMPLE: adding return type declarations*/

declare(strict_types=1); // strict requirement

function addNumbers(float $a, float $b) : float {
  return $a + $b;
}
echo addNumbers(1.2, 5.2);

?>  
</html>

<!-- 
    To specify strict we need to set declare(strict_types=1);. This must be on the very first line of the PHP file.
    The strict declaration forces things to be used in the intended way.
-->

<!-- 
    the return type declaration used with -> declare(strict_types=1);  tells the function what type of data type to expect in the return statement 
-->

<!-- 
-->