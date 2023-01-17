<!--  PHP FORM COMPLETE: completed
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
  if (empty($_POST["Name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["Website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["Website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["Comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["Comment"]);
  }

  if (empty($_POST["Gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["Gender"]);
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
    Name: <input type="text" name="Name" value="<?php echo $name;?>"/> <span class="required">* <?php echo $nameErr;?></span>
    <br>
    <br>
    E-mail: <input type="text" name="Email" value="<?php echo $email;?>"/> <span class="required">* <?php echo $emailErr;?></span>
    <br>
    <br>
    Website: <input type="text" name="Website" value="<?php echo $website;?>"/> <span class="required"> <?php echo $websiteErr;?></span>
    <br>
    <br>
    Comment: <textarea name="Comment" rows="3" cols="30"><?php echo $comment;?></textarea>
    <br>
    <br>
    Gender: 
    <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="Male"/> Male
    <input type="radio" name="Gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="Female"/> Female <span class="required">* <?php echo $genderErr;?></span>
    <br>
    <br>
    <input type="submit"/>
  </form>
  <h1>Your input:</h1>
  <?php
echo "Name: $name";
echo "<br>";
echo "Email: $email";
echo "<br>";
echo "Website: $website";
echo "<br>";
echo "Comment: $comment";
echo "<br>";
echo "Gender: $gender";
?>

</body>
</html>
<!-- 
-->

<!-- 
-->

<!-- 
-->