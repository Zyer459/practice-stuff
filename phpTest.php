<!-- PHP OOP - STATIC METHODS & PROPERTIES: 
                          Static methods & properties can be called directly - without creating an instance of the class first.
                          Static methods & properties are declared with the 'static' keyword
                          To access a static method/property use the class name, double colon (::), and the method/property name

                          ClassName::staticMethod();
                          ClassName::$staticProp;
             
-->

<!-- More info: 
                A class can have both static and non-static methods & properties.
                A static method/property can be accessed from a method in the same class
                using the 'self' keyword and double colon (::)
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
/**EXAMPLE: accessing static methods in the same class*/

class greeting {
  public static function Welcome () {
    echo "Hello world";
  }

  public function __construct () {
    self::Welcome();
  }
}
new greeting();

/**Example: accessing static properties in same class */

class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo $pi->staticValue();

?>
</body>
</html>

<!-- 
  accessing static properties is different from accessing static methods

  to access static property first assign the class to an object
  then access the function through the obj
-->

<!-- 
-->

<!-- 
-->