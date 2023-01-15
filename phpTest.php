<!--  PHP FORM VALIDATION:
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
  <h1>PHP Form Validation Example:</h1>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    Name: <input type="text" name="Name"/>
    E-mail: <input type="email" name="Email"/>
    Website: <input type="text" name="WebSite"/>
    Comment: <textarea rows="3" cols="17" name="Comment"></textarea>
    Gender: 
    <input type="radio" name="Gender" value="Male">Male
    <input type="radio" name="Gender" value="Female">Female
  </form>
</body>

</html>

<!-- What is the $_SERVER["PHP_SELF"] variable?
The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
So, the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
This way, the user will get error messages on the same page as the form.
-->

<!-- What is the htmlspecialchars() function?
The htmlspecialchars() function converts special characters to HTML entities.
This means that it will replace HTML characters like < and > with &lt; and &gt;
 This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.
-->

<!-- 
-->