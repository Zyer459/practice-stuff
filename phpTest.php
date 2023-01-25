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
  PHP - Overriding Inherited Methods:
       Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
       Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the
       __construct() and intro() methods in the parent class (Fruit)
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
/**Example: overriding protected access modifiers
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
    }
  }

  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name =$name;
      $this->color =$color;
      $this->weight =$weight;
    }
    public function intro () {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }

  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();

?>
</body>
</html>

<!--  
    Example Explained: since the intro() is protected method from inside the derived class there is no error
-->

<!-- 
-->

<!-- 
-->