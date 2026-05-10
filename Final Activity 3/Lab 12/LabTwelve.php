<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br><br>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    $name = $_POST["name"] ?? '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($name)) {
            echo "<p style='color:red;'>Name is required</p>";
        } else {
            echo "<h3>Submitted: " . htmlspecialchars($name) . "</h3>";
        }
    }
    ?>
</body>
</html>