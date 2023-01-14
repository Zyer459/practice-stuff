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

                PHP $_REQUEST: its a php super global variable which is used to collect data after submitting an HTML form


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
/**EXAMPLE:  The example below shows a form with an input field and a submit button.
 * When a user submits the data by clicking on "Submit", the form data is sent to the file specified in the action attribute of the <form> tag.
 * In this example, we point to this file itself for processing form data.
 * If you wish to use another PHP file to process form data, replace that with the filename of your choice.
 * Then, we can use the super global variable $_REQUEST to collect the value of the input field.
*/
?>

<form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>"><!-- can replace the current action attribute value with the name of the php file that will handle the request(can be this file) -->
  Name: <input type="text" name="fname">
  <input type="submit">
</form>
<?php

$name = $_REQUEST['fname'];//important -> the name inside [] must be same as the name of the input field
echo $name;
?>

</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->