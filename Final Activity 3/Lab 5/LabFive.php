<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaler=1.0">
    <title>Lab 5</title>
</head>
<body>
    <form method="post">
        <input type="text" name="name" placeholder="Try <script>alert('XSS')</script>" size="50"><br><br>
        <input type="submit" value="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"] ?? '';
    echo "<h3>You entered (Raw):</h3>";
    echo $name. "<br><br>";

    echo "<h3>Safe Output (with htmlspecialchars):</h3>";
    echo htmlspecialchars($name);
}
?>
</body>
</html>