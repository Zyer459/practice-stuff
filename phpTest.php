<!--  
PHP ADVANCED: PHP file handling
            PHP has several functions for creating, reading, uploading, and editing files.
            Be careful when manipulating files!
            Common errors are: editing the wrong file, filling a hard-drive with garbage data, 
            and deleting the content of a file by accident.
            The readfile() function reads a file and writes it to the output buffer.
-->

<!-- 
content of the file:
  Assume we have a text file called "webdictionary.txt", stored on the server, that looks like this:
  AJAX = Asynchronous JavaScript and XML
  CSS = Cascading Style Sheets
  HTML = Hyper Text Markup Language
  PHP = PHP Hypertext Preprocessor
  SQL = Structured Query Language
  SVG = Scalable Vector Graphics
  XML = EXtensible Markup Language
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
/**The PHP code to read the file and write it to the output buffer is as follows
* (the readfile() function returns the number of bytes read on success): */
echo readfile("webdictionary.txt");
?>
</body>
</html>
<!-- 
    The readfile() function is useful if all you want to do is open up a file and read its contents.
-->

<!-- 
-->

<!-- 
-->