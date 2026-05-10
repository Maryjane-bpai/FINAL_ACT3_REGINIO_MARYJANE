<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Message:<br>
        <textarea name="message" rows="6" cols="50"></textarea><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $message = $_POST["message"] ?? '';
        if (!empty($message)) {
            echo "<h3>Your Message:</h3>";
            echo nl2br(htmlspecialchars($message));
        }
    }
    ?>
</body>
</html>