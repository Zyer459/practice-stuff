<!--  PHP GLOBAL VARIABLES-SUPER GLOBAL:
                SUPER GLOBALS are per-defined php varibles that are always available in all scopes
                they are as follows:
                $GLOBALS
                $_SERVER
                $_REQUEST
                $_POST
                $_GET
                $_FILES
                $_ENV
                $_COOKIE
                $_SESSION

                PHP $_POST/GET: these are 2 php super global variables, both collects user form data
                $_POST hides URL parameters & $_GET does not. More in php forms


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
/**EXAMPLE: the example is as same as $_REQUEST*/
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name:($_POST) <input type="text" name="fname">
  <input type="submit">
</form>

<?php
/**below is for POST method */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name:($_GET) <input type="text" name="fname">
  <input type="submit">
</form>

<?php
/**below is for GET method */
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // collect value of input field
  $name = $_GET['fname'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>

</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->