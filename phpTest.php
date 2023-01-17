<!--  PHP FORM COMPLETE:
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php document</title>
    <style>.required {color: red;}</style>
</head>
<body>
  
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <h1>PHP complete form example</h1>
  <p class="required">* required field</p>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Name: <input type="text" name="Name"/> <span class="required">* <?php echo $nameErr;?></span>
    E-mail: <input type="text" name="Email"/> <span class="required">* <?php echo $emailErr;?></span>
    Website: <input type="text" name="Website"/> <span class="required"> <?php echo $websiteErr;?></span>
    Comment: <textarea name="Comment" rows="3" cols="30"></textarea>
    Gender: 
    <input type="radio" name="Gender" value="Male"/> Male
    <input type="radio" name="Gender" value="Female"/> Female <span class="required">* <?php echo $genderErr;?></span>
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