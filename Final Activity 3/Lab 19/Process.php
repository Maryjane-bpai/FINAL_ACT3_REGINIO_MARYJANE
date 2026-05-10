<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Form Result</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            echo "<p style='color:red;'>Name is required</p>";
        } else {
            echo "Name: " . htmlspecialchars($_POST["name"]) . "<br>";
        }
        if (empty($_POST["email"])) {
            echo "<p style='color:red;'>Email is required</p>";
        } else {
            echo "Email: " . htmlspecialchars($_POST["email"]);
        }
    }
    ?>
    <br><br>
    <a href="form.php">← Back to Form</a>
</body>
</html>