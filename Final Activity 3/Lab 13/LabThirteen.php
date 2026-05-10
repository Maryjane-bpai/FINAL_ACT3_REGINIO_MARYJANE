<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST["password"] ?? '';
        if (empty($password)) {
            echo "<p style='color:red;'>Password is required</p>";
        } else {
            echo "<p style='color:green;'>Password received successfully (not displayed for security).</p>";
        }
    }
    ?>
</body>
</html>