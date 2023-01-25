<!-- PHP OOP - INHERITANCE
               Inheritance in OOP = When a class derives from another class.
               The child class will inherit all the public and protected properties and methods from the parent class.
               In addition, it can have its own properties and methods.
               An inherited class is defined by using the extends keyword.
            

-->

<!-- 
  PHP - The final keyword:
      The final keyword can be used to prevent class inheritance or to prevent method overriding.
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
/*Example: The following example shows how to prevent class inheritance:*/

final class Fruit {
  // some code
}

// will result in error
class Strawberry extends Fruit {
  // some code
}

/**Example: The following example shows how to prevent method overriding: */

class Fruit2 {
  final public function intro() {
    // some code
  }
}

class Strawberry2 extends Fruit2 {
  // will result in error
  public function intro() {
    // some code
  }
}
?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->