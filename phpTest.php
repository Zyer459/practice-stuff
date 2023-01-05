<!-- a php script is executed on the server & plain HTML is sent to the browser -->
<!-- basic php syntax: php script can be placed anywhere in the document & starts/ends with...
<?php
// PHP code goes here
?>
the php file normally contains HTML tags and php scripting code
below is an example of simple php file which uses built-in function to output some text -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php document</title>
</head>
<body>
    <h1> Below is some php code</h1>
</body>

<?php
echo ("Hello World");
?>
</html>

<!-- php statements end with semi-colon similar to JS or C
and the () parentheses can be skipped from line 22 -->

<!-- Q. How to run php file? - -> 1. open the terminal or cmd (CLI)
2. write >>> php -S localhost:4000 <<< and press enter
3. This command opens up a server on your local machine
4. The server will start looking for php or any other server-side files in a folder mentioned on the CLI
5. if the path of the folder is not mentioned its probably in C:User\{userName}
6. place the file there and then do not start debugging immediately
7. open up a browser and type the address of the server shown on the CLI
8. still you won't see anything because you need to type in the specific folder name in the address bar