<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title>Lab 1</title>
</head>
<body>
    <form method="get" action="">
    Name: <input type="text" name="name">
    <input type="submit">
    </form>

<?php
    if(isset($_GET['name'])){
        echo "Hello," . $_GET['name'];
    }
?>
</body>
</html>