<!-- PHP OOP - Constructor
               A constructor allows you to initialize an object's properties upon creation of the object
               If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
               Notice that the construct function starts with two underscores (__)!
               that using a constructor saves us from calling the set_name() method which reduces the amount of code      
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
/**Example: the construtor reduces code and saves time*/

class Fruit {
    public $name;
    public $color;
  
    function __construct($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $apple = new Fruit("Apple");
  echo $apple->get_name();

  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<br>";

  class Fruit2 {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
  $apple = new Fruit2("Apple", "red");
  echo $apple->get_name();
  echo "<br>";
  echo $apple->get_color();
?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->