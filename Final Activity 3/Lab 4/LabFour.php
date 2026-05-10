<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Lab 4</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <imput type="submit" nalue="submit">
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    IF (empty($_POST["name"])){
        echo "Name is required.";
    }
    if (empty($_POST['email'])){
        echo "Email is required";
    }
}
?>
</body>
</html>