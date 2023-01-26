<!-- PHP OOP - TRAITS: What are Traits?
              PHP only supports single inheritance: a child class can inherit only from one single parent.
              So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
              Traits are used to declare methods that can be used in multiple classes.
              Traits can have methods and abstract methods that can be used in multiple classes,
              and the methods can have any access modifier (public, private, or protected).
              Traits are declared with the trait keyword
             
-->

<!-- 
  syntax: 
         trait TraitName {
  // some code...
}

To use a trait in a class, use the 'use' keyword:
class MyClass {
  use TraitName;
}
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
/**EXAMPLE:
*/

trait message1 {
  public function msg1() {
      echo "OOP is fun! ";
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();

?>
</body>
</html>

<!-- 
  Example Explained:
                    Here, we declare one trait: message1.
                    Then, we create a class: Welcome.
                    The class uses the trait, and all the methods in the trait will be available in the class.
                    If other classes need to use the msg1() function, simply use the message1 trait in those classes.
                    This reduces code duplication, because there is no need to redeclare the same method over and over again.


-->

<!-- 
-->

<!-- 
-->