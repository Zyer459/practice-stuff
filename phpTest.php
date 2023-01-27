<!-- PHP OOP - STATIC METHODS & PROPERTIES: 
                          Static methods & properties can be called directly - without creating an instance of the class first.
                          Static methods & properties are declared with the 'static' keyword
                          To access a static method/property use the class name, double colon (::), and the method/property name

                          ClassName::staticMethod();
                          ClassName::$staticProp;
             
-->

<!-- More info (static method):
                               Static methods can also be called from methods in other classes.
                               To do this, the static method should be public
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
/**EXAMPLE: accessing static methods from other classes*/

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

$obj = new SomeOtherClass();
$obj -> message();

?>
</body>
</html>

<!-- 
  must create an instance of the 2nd class and then access the static method
-->

<!-- 
-->

<!-- 
-->