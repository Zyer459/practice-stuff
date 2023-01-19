<?php
// start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy</title>
</head>
<body>
    <?php
    // set session variables
    $_SESSION["favcolor"] = "grey";
    $_SESSION["favanimal"] = "cat";
    echo "session variables are set";

    /**MODIFY SESSION VARIABLES
     * To change a session variable, just overwrite it
     * DESTROY SESSION
     * To remove all global session variables and destroy the session,
     * use session_unset() and session_destroy()
     */
    ?>
</body>
</html>