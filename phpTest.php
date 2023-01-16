<!--  PHP FORM COMPLETE:
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
  <h1>PHP complete form example</h1>
  <p>* required field</p>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Name: <input type="text" name="Name"/>
    E-mail: <input type="text" name="Email"/>
    Website: <input type="text" name="Website"/>
    Comment: <textarea name="Comment" rows="3" cols="30"></textarea>
    Gender: 
    <input type="radio" name="Gender" value="Male"/> Male
    <input type="radio" name="Gender" value="Female"/> Female
    <input type="submit"/>
  </form>
  <h1>Your input:</h1>
</body>
</html>

<!-- 
-->

<!-- 
-->

<!-- 
-->