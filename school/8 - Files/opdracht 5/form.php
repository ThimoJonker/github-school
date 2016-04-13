<?php
/**
 * Created by PhpStorm.
 * User: tammo
 * Date: 12-4-2016
 * Time: 18:42
 */
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>File Upload - 5</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="script.php" method="post" enctype="multipart/form-data">
        <h3>Select .doc of .docx bestand:</h3>
        <input type="file" name="fileToUpload" id="fileToUpload"><br/>
        <input type="submit" value="Upload" name="submit" class="btn btn-primary">
    </form>
</div>

</body>
</html>
