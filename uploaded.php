<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $filename = isset($_FILES['file_uploaded']['name']) ? $_FILES['file_uploaded']['name']:false;
        $filetype = isset($_FILES['file_uploaded']['type']) ? $_FILES['file_uploaded']['type']:false;
        $tmp_name = isset($_FILES['file_uploaded']['tmp_name']) ? $_FILES['file_uploaded']['tmp_name']:false;
        $Error = isset($_FILES['file_uploaded']['error']) ? $_FILES['file_uploaded']['error']:false;
        $size = isset($_FILES['file_uploaded']['size']) ? $_FILES['file_uploaded']['size']:false;
         move_uploaded_file($tmp_name,__DIR__."/file/".$filename);
    }
?>

<html>
    <head>
        <title>
            form Upload file
        </title>
    </head>
    <body>
        <h4>Detail File</h4>
        <table>
            <tr>
                <td>File name</td>
                <td><?=$filename?></td>
            </tr>
            <tr>
                <td>File Type</td>
                <td><?=$filetype?></td>
            </tr>
            <tr>
                <td>File Tempolary</td>
                <td><?=$tmp_name?></td>
            </tr>
            <tr>
                <td>Error</td>
                <td><?=$Error?></td>
            </tr>
            <tr>
                <td>Size</td>
                <td><?=$size?></td>
            </tr>
        </table>
        <h3>Form Uploade </h3>
        <form action="uploaded.php" method="POST" enctype="multipart/form-data">
            <label for="file_uploaded">
                Upload file :
                <input type="file" name="file_uploaded" id="file_uploaded">
            </label>
            <br>
            <br>
            <input type="submit" value="Upload File">
        </form>
    </body>
</html>