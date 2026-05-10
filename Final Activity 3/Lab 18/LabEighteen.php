<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 18</title>
</head>
<body>
    <h2>GET Form</h2>
    <form method="get">
        Name: <input type="text" name="name"><br><br>
        <input type="submit" value="Submit GET">
    </form>

    <h2>POST Form</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        <input type="submit" value="Submit POST">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["name"])) {
        echo "<h3>GET Result: " . htmlspecialchars($_GET["name"]) . "</h3>";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"])) {
        echo "<h3>POST Result: " . htmlspecialchars($_POST["name"]) . "</h3>";
    }
    ?>
</body>
</html>