<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        
        Gender:<br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br><br>
        
        Course:
        <select name="course">
            <option value="">Select Course</option>
            <option value="PHP">PHP</option>
            <option value="JavaScript">JavaScript</option>
            <option value="Python">Python</option>
        </select><br><br>
        
        Message:<br>
        <textarea name="message" rows="5" cols="40"></textarea><br><br>
        
        <input type="submit" value="Submit">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        echo "<p style='color:red;'>Name is required</p>";
    }
    if (empty($_POST["email"])) {
        echo "<p style='color:red;'>Email is required</p>";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Invalid email</p>";
    }
    if (empty($_POST["gender"])) {
        echo "<p style='color:red;'>Gender is required</p>";
    }
    if (empty($_POST["course"])) {
        echo "<p style='color:red;'>Course is required</p>";
    }

    echo "<hr><h3>You Submitted:</h3>";
    echo "Name: " . htmlspecialchars($_POST["name"] ?? '') . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"] ?? '') . "<br>";
    echo "Gender: " . htmlspecialchars($_POST["gender"] ?? '') . "<br>";
    echo "Course: " . htmlspecialchars($_POST["course"] ?? '') . "<br>";
    echo "Message: " . nl2br(htmlspecialchars($_POST["message"] ?? ''));
}
?>
</body>
</html>