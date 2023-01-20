<!--  
PHP ADVANCED: PHP FILTER -> filters are used to validate & sanitize external input
                           such as-> User input from a form, cookies, web services data, server variables, database query results
-->

<!-- 
  the filter_var() function can both validate & sanitize data. It has 2 parameters 
  1) the variable you want to check
  2) the type of check to use
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
$int = 122;
$min = 1;
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
  echo("Variable value is not within the legal range");
} else {
  echo("Variable value is within the legal range");
}
?>
</body>
</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->