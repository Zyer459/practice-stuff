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

                PHP $_SERVER: its a super global variable which holds info about headers, path and script locations.


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
/**EXAMPLE: The example below shows how to use some of the elements in $_SERVER */

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER']; //gives warning if used on localhost
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>  
</html>

<!-- 
    https://www.w3schools.com/php/php_superglobals_server.asp
-->

<!-- 
-->

<!-- 
-->