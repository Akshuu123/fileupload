<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="mainupload">
        <form class='uploaddata' action="upload.php" method="post" enctype="multipart/form-data">
            <label for="uploadimage">Select Image File to Upload</label>
            <input type="file" name="file" required>
            <input type="submit" name="submit" value="Upload">
        </form>
        <a href="showdata.php">Show Data</a>
    </div>

    <script>
        let file=document.getElementsByName('file');
        console.log(file);
    </script>