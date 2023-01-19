<!--  
PHP ADVANCED: PHP SESSIONS -> a session is a way to store info as variables to be used across multiple pages
              unlike a cookie info is not stored in user's computer.
              the php session allows the server to remember the user across multiple pages
              by default session variables last until the user closes the browser
-->

<!-- 
  START A PHP SESSION: start a session with startsession() func
    1) create a new page called demo_session1.php here start a new php session and set some session variables
    2) Next, we create another page called "demo_session2.php". From this page, we will access the session information
-->

<!--
-->
<?php session_start(); ?>
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
  include "demo_session2.php";
  ?>
</body>
</html>

<!-- 
  Note: The session_start() function must be the very first thing in your document. Before any HTML tags.
-->

<!-- 
  Notice that session variables are not passed individually to each new page,
  instead they are retrieved from the session we open at the beginning of each page (session_start()).
  Also notice that all session variable values are stored in the global $_SESSION variable
-->

<!-- 
  Important! use include or require to use the session files
-->