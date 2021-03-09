<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test upload</title>
</head>
<?php
if(isset($_POST['submit'])){
    echo "<pre>";
    print_r($_FILES['myFile']);
    echo "</pre>";
    $fileName=$_FILES['myFile']['name'];
    move_uploaded_file($_FILES['myFile']['tmp_name'],"images/$fileName");



}
?>
<body>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="myFile">

    <input type="submit" name="submit">
    <img src="images/<?=$_FILES['myFile']['name']?>">
</form>
</body>
</html>