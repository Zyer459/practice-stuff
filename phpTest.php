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
    <!-- example-1: assume that we have a standard footer to include in multiple html files-->
    <h1>Welcome to my home page!</h1>
    <p>Some text.</p>
    <p>Some more text.</p>
    <?php include 'footer.php';?> <!-- here the footer file doesn't really exist its just for example -->
</body>
</html>
<!-- 
    since the file doesn't exist the include statement returns a warning
-->

<!-- below is the content of the footer .php file
<php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
>
-->

<!-- 
-->