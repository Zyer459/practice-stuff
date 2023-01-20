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
// Variable to check
$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

// Validate ip as IPv6
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
  echo("$ip is a valid IPv6 address");
} else {
  echo("$ip is not a valid IPv6 address");
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