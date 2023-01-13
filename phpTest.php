<!--  PHP FUNCTIONS: 
                Passing Arguments by Reference:
                 there are 2 ways of passing arguments to a function
                 1) pass by value 2)pass by reference

                 1) pass by value: its the usual way of passing arguments to a function,
                 it means that a copy of the value is used in the function & the variable (which had the value) passed
                 into the function cannot be changed by the function -> in short
                 the value of the variable is copied & saved in a different variable inside the function & the new variable can only be changed within the function
                 and it will not affect the variable outside the function

                 2) pass by reference: When a function argument is passed by reference,
                 changes to the argument also change the variable that was passed into the function.
                 To turn a function argument into a reference, the & operator is used.

                 in short -> changed a variable outside a function by passing it as an argument by reference
                 changes made to the argument within the function will affect the variable outside

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
/**EXAMPLE: Use a pass-by-reference argument to update a variable*/

function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

?>  
</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->