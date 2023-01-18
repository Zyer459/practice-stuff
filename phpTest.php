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
  the fopen() is also used to create a file as well as open a file
  example  -  $myfile = fopen("testfile.txt", "w");
  wills create a file if it doesn't exist if the file is opened for writting("w")/appending("a")

  The fwrite() function is used to write to a file.
  The first parameter of fwrite() contains the name of the file to write to and
  the second parameter is the string to be written.
  example -  $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
             $txt = "John Doe\n";
             fwrite($myfile, $txt);
             $txt = "Jane Doe\n";
             fwrite($myfile, $txt);
             fclose($myfile);
  Notice that we wrote to the file "newfile.txt" twice.
  Each time we wrote to the file we sent the string $txt that first contained "John Doe" and second contained "Jane Doe".
  After we finished writing, we closed the file using the fclose() function.

  using "w" mode & overwritting deletes all previous existing data 
  append "a" mode appends some data to the existing file
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
-->

<!-- 
-->

<!-- 
-->