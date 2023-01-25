<!-- PHP CONSTANTS - Constants cannot be changed once it is declared.
                    Class constants can be useful if you need to define some constant data within a class.
                    A class constant is declared inside a class with the const keyword.
                    Class constants are case-sensitive.
                    However, it is recommended to name the constants in all uppercase letters.
                    We can access a constant from outside the class
                    by using the class name followed by the scope resolution operator (::) followed by the constant name

-->

<!-- 
-->

<!--
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
<?php
/**accessing constant from outside class */

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting demo.com!";
}
echo Goodbye::LEAVING_MESSAGE;//accessing the constant outside the function

/**accessing constant from inside class */

class Goodbye2 {
  const LEAVING_MESSAGE = "Thank you for visiting demo.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;//accessing the function from inside the function
  }
}

$goodbye = new Goodbye2();
$goodbye->byebye();
?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->