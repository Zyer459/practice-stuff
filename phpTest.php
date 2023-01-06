<!--  PHP DATA TYPES:
      php supports following data types:

      1) String: done
      2) Integer: done + can be decimal, hex, octal, or binary integer
      3) Float: done
      4) Boolean: done
      5) Array: multiple values in single variable, example: $cars = array ("Volvo", "BMW", "Ford");
      6) Object: object & class are important for OOP, class = template for object & object = instance of class
      7) NULL: special data type, it has only 1 value -> NULL. If a variable is created without assigning any value to it, it automatically becomes NULL
      variables can also be emptied by setting its value to NULL.
      8) Resource: its not an actually data type. Its the sorting of of a reference to function & resources external to php.
      A common example of using the resource data type is a database call.

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
    <h1> Below is some php code</h1>
</body>

<?php
/**EXAMPLE OF CLASS & OBJECT */
class Car {
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message () {
        return "My car is a " .$this->color. " " .$this->model. "!";
    }
}

$myCar = new Car ("black", "Toyota");
echo ($myCar->message());
echo ("</br>");
$myCar = new Car ("Red", "Audi");
echo ($myCar->message());
?>
</html>

<!--
-->

<!-- 
-->

<!-- 
-->