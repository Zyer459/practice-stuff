<!-- PHP OOP - INTERFACES:
              Interfaces allow you to specify what methods a class should implement.
              Interfaces make it easy to use a variety of different classes in the same way.
              When one or more classes use the same interface, it is referred to as "polymorphism".
              Interfaces are declared with the interface keyword
}
-->

<!-- 
  syntax:
        interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}
-->

<!--
  Interfaces vs. Abstract Classes:
  Interface are similar to abstract classes. The difference between interfaces and abstract classes are:
    1) Interfaces cannot have properties, while abstract classes can
    2) All interface methods must be public, while abstract class methods is public or protected
    3) All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    4) Classes can implement an interface while inheriting from another class at the same time
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
/**EXAMPLE: To implement an interface, a class must use the implements keyword.
 * A class that implements an interface must implement all of the interface's methods.
*/

interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();

?>
</body>
</html>

<!-- 
  From the example above, let's say that we would like to write software which manages a group of animals.
  There are actions that all of the animals can do, but each animal does it in its own way.
  Using interfaces, we can write some code which can work for all of the animals even if each animal behaves differently
  
  see php interfaces-pt2
-->

<!-- 
-->

<!-- 
-->