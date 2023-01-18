<!--  
PHP ADVANCED: PHP file handling
            PHP has several functions for creating, reading, uploading, and editing files.
            Be careful when manipulating files!
            Common errors are: editing the wrong file, filling a hard-drive with garbage data, 
            and deleting the content of a file by accident.
            The readfile() function reads a file and writes it to the output buffer.

             better method to open files is with the fopen() function.
             This function gives you more options than the readfile() function.
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
/**example also generates a message if the fopen() function is unable to open the specified file:*/
$myFile = fopen ("webdictionary.txt", "r") or die ("Unable to open file");
echo fread($myFile,filesize("webdictionary.txt"));
fclose($myFile);
?>
</body>
</html>
<!-- 
The first parameter of fopen() contains the name of the file to be opened
  and the second parameter specifies in which mode the file should be opened.
-->

<!-- 
  Modes: 
        r = Open a file for read only. File pointer starts at the beginning of the file
        w = Open a file for write only.
            Erases the contents of the file or creates a new file if it doesn't exist. 
            File pointer starts at the beginning of the file
        a = Open a file for write only.
            The existing data in file is preserved.
            File pointer starts at the end of the file.
            Creates a new file if the file doesn't exist
        x = Creates a new file for write only. Returns FALSE and an error if file already exists
        r+ = Open a file for read/write. File pointer starts at the beginning of the file
        w+ = Open a file for read/write.
             Erases the contents of the file or creates a new file if it doesn't exist.
             File pointer starts at the beginning of the file
        a+ = Open a file for read/write.
             The existing data in file is preserved.
             File pointer starts at the end of the file.
             Creates a new file if the file doesn't exist
        x+ = Creates a new file for read/write. Returns FALSE and an error if file already exists
-->

<!-- 
  functions: 
  fopen() - opens up a file
  fread() - reads from a file, The first parameter of fread() contains the name of the file to read from
            and the second parameter specifies the maximum number of bytes to read.
  fclose() - closes an opened up file
  fgets()  - used to read a single line from a file {Note: After a call to the fgets() function, the file pointer has moved to the next line}
  feof() - checks if the "end-of-file" (EOF) has been reached. function is useful for looping through data of unknown length.
           reads document file line by line until the end is reached
  fgetc() - used to read a single character from a file {Note: After a call to the fgetc() function, the file pointer moves to the next character}
-->