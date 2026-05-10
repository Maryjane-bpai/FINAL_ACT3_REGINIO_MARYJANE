!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            echo "<p style='color:red;'>Name is required</p>";
        } else {
            echo "<h3>Hello, " . htmlspecialchars($_POST["name"]) . "!</h3>";
        }
    }
    
    /**
     *  Using $_SERVER["PHP_SELF"] is safer because it keeps 
     * the form on the same page and prevents some attacks.
     */
    ?>
</body>
</html>