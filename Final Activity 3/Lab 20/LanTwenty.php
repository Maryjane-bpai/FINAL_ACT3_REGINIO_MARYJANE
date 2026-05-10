<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 20 - Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        
        Gender:<br>
        <input type="radio" name="gender" value="Male"> Male<br>
        <input type="radio" name="gender" value="Female"> Female<br><br>
        
        Course:
        <select name="course">
            <option value="">Select Course</option>
            <option value="BSIT">BSIT</option>
            <option value="BSCS">BSCS</option>
            <option value="BSIS">BSIS</option>
        </select><br><br>
        
        Hobbies:<br>
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
        <input type="checkbox" name="hobbies[]" value="Music"> Music<br><br>
        
        Message:<br>
        <textarea name="message" rows="5" cols="40"></textarea><br><br>
        
        <input type="submit" value="Register">
        <input type="reset" value="Reset">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
        if (empty($_POST["name"])) {
            echo "<p style='color:red;'>Name is required</p>";
        }

        if (empty($_POST["email"])) {
            echo "<p style='color:red;'>Email is required</p>";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>Invalid email format</p>";
        }

        if (empty($_POST["gender"])) {
            echo "<p style='color:red;'>Gender is required</p>";
        }

        if (empty($_POST["course"])) {
            echo "<p style='color:red;'>Course is required</p>";
        }

    
        echo "<hr>";
        echo "<h3>Submitted Data:</h3>";
        echo "<strong>Name:</strong> " . htmlspecialchars($_POST["name"] ?? '') . "<br>";
        echo "<strong>Email:</strong> " . htmlspecialchars($_POST["email"] ?? '') . "<br>";
        echo "<strong>Gender:</strong> " . htmlspecialchars($_POST["gender"] ?? '') . "<br>";
        echo "<strong>Course:</strong> " . htmlspecialchars($_POST["course"] ?? '') . "<br>";
        
        if (!empty($_POST["hobbies"])) {
            echo "<strong>Hobbies:</strong> ";
            foreach($_POST["hobbies"] as $h) {
                echo htmlspecialchars($h) . " ";
            }
            echo "<br>";
        }
        
        echo "<strong>Message:</strong> " . nl2br(htmlspecialchars($_POST["message"] ?? ''));
    }
    ?>

</body>
</html>