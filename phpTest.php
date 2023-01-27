<!-- PHP OOP - STATIC METHODS & PROPERTIES: 
                          Static methods & properties can be called directly - without creating an instance of the class first.
                          Static methods & properties are declared with the 'static' keyword
                          To access a static method/property use the class name, double colon (::), and the method/property name

                          ClassName::staticMethod();
                          ClassName::$staticProp;
             
-->

<!-- 
  Syntax: static methods
        class ClassName {
  public static function staticMethod() {
    echo "Hello World!";
  }
}
-->

<!--
  Syntax: static property
         class ClassName {
  public static $staticProp = "Hello world";
}
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
/**EXAMPLE: static method*/

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();

/**Example: static property */

class pi {
  public static $value = 3.1416;
}

//get static property
echo pi::$value;

?>
</body>
</html>

<!-- 
  Example Explained static method:
                     Here, we declare a static method: welcome().
                     Then, we call the static method by using the class name,
                     double colon (::), and the method name (without creating an instance of the class first).
-->

<!-- 
   Example Explained static property:
                      Here, we declare a static property: $value.
                      Then, we echo the value of the static property by using the class name,
                      double colon (::), and the property name (without creating a class first).
-->

<!-- 
-->