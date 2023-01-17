<!--  
PHP ADVANCED: PHP include or require
    The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it into the file that uses the include statement.
    Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.
    syntax: include 'filename'; or require 'filename';
-->

<!-- 
PHP include and require Statements: It is possible to insert the content of one PHP file into another PHP file (before the server executes it), 
    with the include or require statement.

    The include and require statements are identical, except upon failure:
    require will produce a fatal error (E_COMPILE_ERROR) and stop the script from executing
    include will only produce a warning (E_WARNING) and the script will continue

    So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement.
    Otherwise, always use the require statement to include a key file to the flow of execution.
    This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.

    Including files saves a lot of work. This means that you can create a standard header, footer, or menu file for all your web pages.
    Then, when the header needs to be updated, you can only update the header include file.
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
    <h1>Welcome to my home page!</h1>
<?php
/**execute echo statement even if file is missing */
    include 'noFileExists.php';
    echo "I have a $color car";
?>
<br>
<br>
<br>
<?php
/**stop the execution of php script entirely/completely */
require "thisFileDoesn'tExistEither";
echo "I have a $color shirt";
?>
</body>
</html>
<!-- 
    using the include statement below the warnings see that the script executes though there is missing file
-->

<!-- 
    If we do the same example using the require statement,
    the echo statement will not be executed because the
    script execution dies after the require statement returns a fatal error
-->

<!-- 
-->