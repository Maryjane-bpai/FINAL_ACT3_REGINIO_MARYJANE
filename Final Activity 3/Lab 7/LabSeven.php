<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaler=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Gender:<br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br><br>
        <input typer="submit" value="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["gender"])){
        echo "<h3>Selected Gender: " . htmlspecialchars($_POST["gender"]) . "</h3>";
    }
}
?>
</body>
</html>