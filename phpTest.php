<!--  
PHP ADVANCED: PHP COOKIES -> cookie is a small file that the server embeds on the user's computer to identify the user's computer
              Each time the same computer requests a page with a browser, it will send the cookie too.
              With PHP, you can both create and retrieve cookie values.
              use the setcookie() function to create a cookie

              SYNTAX -> setcookie(name, value, expire, path, domain, secure, httponly); only the name parameter is required, others are optional.
-->

<!-- 
-->

<!--
-->

<!DOCTYPE html>
<html lang="en">
  <?php
  $cookie_name = "user";
  $cookie_value = "Zyer459";
  $cookie_time = (time() + (3600 * 24 * 30));
  setcookie($cookie_name, $cookie_value, $cookie_time, "/");
  ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php document</title>
</head>
<body>
  <?php
  /**the following creates a cookie & retrives it
   * which will expire in 30 days
   * " / " the backslash means that the cookie is available in the entire website (otherwise select a prefered directory)
   * then retrive the cookie (using the $_COOKIE super global) also use isset() to check if the cookie is set
   */

   if (!isset($_COOKIE[$cookie_name])) {
    echo "cookie named $cookie_name is not set";
   }
   else {
    echo "cookie $cookie_name is set";
    echo "value is ". $_COOKIE[$cookie_name];
   }
  ?>
</body>
</html>

<!-- 
  Note: the cookie must be set before the <html> tag
-->

<!-- 
-->

<!-- 
-->