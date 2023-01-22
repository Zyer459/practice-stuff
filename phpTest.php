<!-- 
PHP OOP:
       Procedural programming is about writing procedures or functions that perform operations on the data,
       object-oriented programming is about creating objects that contain both data and functions.

       Object-oriented programming has several advantages over procedural programming:
       faster and easier to execute
       provides a clear structure for the programs
        helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
        makes it possible to create full reusable applications with less code and shorter development time
        
-->

<!-- 
CLASS & OBJECTS: Classes and objects are the two main aspects of object-oriented programming.
 a class is a template for objects, and an object is an instance of a class.
 When the individual objects are created, they inherit all the properties and behaviors from the class,
 but each object will have different values for the properties.
-->

<!--
Define a Class: A class is defined by using the class keyword, followed by the name of the class and a pair of curly braces ({})
All its properties and methods go inside the braces
syntax // class ClassName { // codes go here}

Define Objects: Classes are nothing without objects! We can create multiple objects from a class
Each object has all the properties and methods defined in the class, but they will have different property values.

Objects of a class are created using the new keyword.
In the example below, $apple and $banana are instances of the class Fruit
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
/**Example: below we declare a class named Fruit consisting of two properties ($name and $color) and two methods
 * set_name() and get_name() for setting and getting the $name property
 */

 class Fruit {
  //properties = variables + value
  public $name;
  public $color;

  //methods = functions
  function set_name ($name) {
    $this -> name = $name;
  }
  function get_name () {
    return $this -> name;
  }
  //methods for setting & getting color
  function set_color ($color) {
    $this -> color = $color;
  }
  function get_color () {
    return $this -> color;
  }
 }

 // Define objects
 $apple = new Fruit();
 $banana = new Fruit();
 //using set name method
 $apple->set_name('Apple');
 $banana->set_name('Banana');
// using set name method
 echo $apple->get_name();
 echo "<br>";
 echo $banana->get_name();

 echo "<br>";
 // setting & getting color
 $apple -> set_color ("Red");
 $banana -> set_color ("Yellow");
 
 echo $apple -> get_color();
 echo "<br>";
 echo $banana -> get_color();

?>
</body>
</html>

<!--  
-->

<!-- 
-->

<!-- 
-->