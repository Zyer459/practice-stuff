<!-- PHP OOP - ACCESS MODIFIERS
               Properties and methods can have access modifiers which control where they can be accessed.
            There are three access modifiers:
            public - the property or method can be accessed from everywhere. This is default
            protected - the property or method can be accessed within the class and by classes derived from that class
            private - the property or method can ONLY be accessed within the class

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
/**Example: In the following example we have added three different access modifiers to three properties
 * (name, color, and weight). Here, if you try to set the name property it will work fine (because the name property is public, and can be accessed from everywhere)
 * However, if you try to set the color or weight property it will result in a fatal error (because the color and weight property are protected and private)
*/

class Fruit {
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();

$mango->name = "Mango"; //set name property
$mango->color = "Yellow"; //set color this throws an ERROR as undefined property
$mango->weight = '300'; // this throws an ERROR as undefined property

//this is because we have no access to those properties same can be said for functions

class Fruit2 {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  // a public function (default)
      $this->name = $n;
    }
    protected function set_color($n) { // a protected function
      $this->color = $n;
    }
    private function set_weight($n) { // a private function
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit2();
  $mango->set_name('Mango'); // OK
  $mango->set_color('Yellow'); // ERROR
  $mango->set_weight('300'); // ERROR

?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->