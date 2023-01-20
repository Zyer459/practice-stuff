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
/** The following example uses the filter_var() function to check if the variable $url is a URL with a querystring*/
$url = "https://www.microsoft.com"; // try a url with parameters like the url when playing a youtube video

if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
  echo("$url is a valid URL with a query string");
} else {
  echo("$url is not a valid URL with a query string");
}
?>
</body>
</html>

<!-- 
  url with a query string means the url with url parameters
-->

<!-- 
-->

<!-- 
-->