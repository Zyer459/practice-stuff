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
  PHP file upload: with php its easy to upload files to the server
  but always be careful to allow file uploads
-->

<!--
  Steps:
        1) Configure The "php.ini" File: First, ensure that PHP is configured to allow file uploads.
          In your "php.ini" file, search for the file_uploads directive, and set it to On

        2) create the html form: Next, create an HTML form that allow users to choose the image file they want to upload
        3) Create The Upload File PHP Script: The "upload.php" file contains the code for uploading a file
        4) Check if File Already Exists: First, we will check if the file already exists in the "uploads" folder.
            If it does, an error message is displayed, and $uploadOk is set to 0
        5) Limit File Size: The file input field in our HTML form above is named "fileToUpload".
           Now, we want to check the size of the file.
           If the file is larger than 500KB, an error message is displayed, and $uploadOk is set to 0:
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
  <form action="upload.php" method="post" enctype="multipart/form-data">
    Select an image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"/>
    <input type="submit" value="upload image" name="submit"/>
  </form>
</body>
</html>
<!-- 
-->

<!-- 
-->

<!-- 
-->