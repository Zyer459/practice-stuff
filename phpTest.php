<!--  PHP FORMS:



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
    <form action="phpTest.php" method="post">
      <label>
        Name: <input type="text" name="Name"/>
      </label>
      <label>
        E-mail: <input type="email" name="Email"/>
      </label>
      <input type="submit"/>
    </form>

    <?php
    /**EXAMPLE: basic php form handling */

    /*$Name = $_POST["Name"];
    $Email = $_POST["Email"];

    echo "Welcome $Name";
    echo "<br>";
    echo "Your e-mail is $Email";
    commented this because of a better soln look below
    */
    ?>

    <h1>Welcome</h1> <?php echo $_POST["Name"];?>
    <br>
    <h1>Your e-mail is: </h1> <?php echo $_POST["Email"];?>
</body>

</html>

<!-- 
  The code above is quite simple. However, the most important thing is missing. You need to validate form data to protect your script from malicious code.
  This page does not contain any form validation, it just shows how you can send and retrieve form data.
  Proper validation of form data is important to protect your form from hackers and spammers!
-->

<!-- GET
Information sent from a form with the GET method is visible to everyone (all variable names and values are displayed in the URL).
GET also has limits on the amount of information to send. The limitation is about 2000 characters.
However, because the variables are displayed in the URL, it is possible to bookmark the page. This can be useful in some cases.
GET may be used for sending non-sensitive data.
Note: GET should NEVER be used for sending passwords or other sensitive information!
-->

<!-- POST
Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request)
and has no limits on the amount of information to send.
Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
However, because the variables are not displayed in the URL, it is not possible to bookmark the page.
Developers prefer POST for sending form data.
-->