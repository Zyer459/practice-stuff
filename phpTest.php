<!-- PHP OOP - INHERITANCE
               Inheritance in OOP = When a class derives from another class.
               The child class will inherit all the public and protected properties and methods from the parent class.
               In addition, it can have its own properties and methods.
               An inherited class is defined by using the extends keyword.
            

-->

<!-- 
  PHP - Inheritance and the Protected Access Modifier

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
/**Example: protected access modifiers
 * In the example we see that if we try to call a protected method (intro()) from outside the class, we will receive an error.
 * public methods will work fine!
*/

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    protected function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    } // changed the access modifier from public to protected
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message(); // OK. message() is public
  $strawberry->intro(); // ERROR. intro() is protected

?>
</body>
</html>

<!--  
    Example Explained: since the intro() is protected function it throws error when called outside the class
-->

<!-- 
-->

<!-- 
-->