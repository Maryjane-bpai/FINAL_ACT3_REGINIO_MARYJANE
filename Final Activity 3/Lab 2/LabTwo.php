<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>
<body>
    <form method="post" action="">
    Name: <input type="text" name="name">
    <input type="submit">
    </form>

<?php
    if(isset($_POST['name'])){
        echo "Hello," . $_POST['name'];
    }
?>
</body>
</html>
    