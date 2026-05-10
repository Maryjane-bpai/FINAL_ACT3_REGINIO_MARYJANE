!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 16</title>
</head>
<body>
    <form method="post">
        Age: <input type="number" name="age"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = $_POST["age"] ?? '';
        if (empty($age)) {
            echo "<p style='color:red;'>Age is required</p>";
        } elseif (!is_numeric($age)) {
            echo "<p style='color:red;'>Age must be a number</p>";
        } elseif ($age < 1 || $age > 120) {
            echo "<p style='color:red;'>Age must be between 1 and 120</p>";
        } else {
            echo "<p style='color:green;'>Your age is: " . htmlspecialchars($age) . "</p>";
        }
    }
    ?>
 
</body>
</html>