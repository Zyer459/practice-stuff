<!-- PHP OOP - STATIC METHODS & PROPERTIES: 
                          Static methods & properties can be called directly - without creating an instance of the class first.
                          Static methods & properties are declared with the 'static' keyword
                          To access a static method/property use the class name, double colon (::), and the method/property name

                          ClassName::staticMethod();
                          ClassName::$staticProp;
             
-->

<!-- More info (static property): 
                To call a static property from a child class, use the 'parent' keyword inside the child class
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
/**EXAMPLE: accessing astatic property from a child class*/

class pi {
  public static $value = 3.1416;
}

//child class
class x extends pi {
  public function xStatic() {
    return parent::$value;
  }
}
// Get value of static property directly via child class
echo x::$value;

echo "<br>";

// or get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();

?>
</body>
</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->