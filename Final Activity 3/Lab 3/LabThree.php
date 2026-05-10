<!DOCTYPE html>
<html lang="en">
<html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 3</title>
</head>
<body>
    <form method="post" action="">
        Name: <input tyoe="text" name="name">
        Email: <input type="email" name="email">
        <input type="submit">
    </form>

<?php
    if(isset($_POST['name']) && isset($_POST['email'])){
        echo $_POST['name'] . "<br>";
        echo $_POST['email'] . "<br>";
    }
?>

</body>
</html>