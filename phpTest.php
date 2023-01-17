<!--  PHP ADVANCED: PHP date & time
the date() function is used to format date and or time
the function also formats a timestamp to a more readable date and time
syntax: data(format, timestamp);
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
    date_default_timezone_set("Asia/Dhaka"); //set the time zone to get correct time below
    echo "the time is: " .date("h:i:sa");
    ?>
    <br>
    <br>
    <?php
    // time until december 1st
    //$d2 gives time in seconds so its divided to get days, again divide by 30 to get months
    $d1 = strtotime("Dec 1");
    $d2 = ceil (($d1-time())/60/60/24);
    echo $d2;
    ?>
</body>
</html>
<!-- 
-->

<!-- 
-->

<!-- 
-->