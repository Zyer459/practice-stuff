<!-- PHP OOP - ABSTRACT CLASSES:
            Abstract classes and methods are when the parent class has a named method,
            but need its child class(es) to fill out the tasks.
            An abstract class is a class that contains at least one abstract method
            An abstract method is a method that is declared, but not implemented in the code.
            An abstract class or method is defined with the abstract keyword

            syntax
            abstract class ParentClass {
  abstract public function someMethod1();
  abstract public function someMethod2($name, $color);
  abstract public function someMethod3() : string;
}
-->

<!-- 
  When inheriting from an abstract class, the child class method must be defined with the same name,
  and the same or a less restricted access modifier.
  So, if the abstract method is defined as protected,
  the child class method must be defined as either protected or public, but not private.
  Also, the type and number of required arguments must be the same.
  However, the child classes may have optional arguments in addition.
-->

<!--
  So, when a child class is inherited from an abstract class, we have the following rules:
  1) The child class method must be defined with the same name and it redeclares the parent abstract method
  2) The child class method must be defined with the same or a less restricted access modifier
  3) The number of required arguments must be the same. However, the child class may have optional arguments in addition
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
/**EXAMPLE Let's look at another example where the abstract method has an argument:*/

abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");

?>
</body>
</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->