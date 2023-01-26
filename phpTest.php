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

// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

?>
</body>
</html>

<!-- 
Example Explained:
                Cat, Dog and Mouse are all classes that implement the Animal interface,
                which means that all of them are able to make a sound using the makeSound() method
                Because of this, we can loop through all of the animals and tell them to make a sound even if we don't know what type of animal each one is.
                Since the interface does not tell the classes how to implement the method,
                each animal can make a sound in its own way.
-->

<!-- 
-->

<!-- 
-->