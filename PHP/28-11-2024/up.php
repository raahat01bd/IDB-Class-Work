<?php

    if(isset($_POST["btnSubmit"]))
    {
        $file = $_FILES["file"];
        $fileName = $file["name"];
        $fileTmpName = $file["tmp_name"];
        $fileSize = $file["size"];
       
        $img = "image/";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="file">Select File:</label>
        <input type="file" id="file" name="file" accept=".jpg,.png,.gif">
        <input type="submit" value="Upload" name="btnSubmit">
    </form>

    <?php
    echo  "<img src='$img.$file' alt=''>";
    ?>
    
</body>
</html>