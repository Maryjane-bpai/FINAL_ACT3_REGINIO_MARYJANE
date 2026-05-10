<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 14</title>
</head>
<body>
    <form method="post">
        Hobbies:<br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
        <input type="checkbox" name="hobbies[]" value="Music"> Music<br>
        <input type="checkbox" name="hobbies[]" value="Travel"> Travel<br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["hobbies"])) {
            echo "<h3>Selected Hobbies:</h3>";
            foreach($_POST["hobbies"] as $hobby) {
                echo "- " . htmlspecialchars($hobby) . "<br>";
            }
        } else {
            echo "<p style='color:red;'>Please select at least one hobby</p>";
        }
    }
    ?>
</body>
</html>