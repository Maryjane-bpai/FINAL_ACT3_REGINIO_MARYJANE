<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scaler=1.0">
    <title>Lab 6</title>
</head>
<body>
    <form method="post"></form>
       Email: <input type="text" name="email"><br><br>
       <imput type="submit" value="submit">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST");{
        $email = $_POST["email"] ?? '';
        if (empty($email)){
            echo "<p style='color:red;'>Email is required</p>";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "p style='color:red;'>Invalid email</p>";
        }else{
            echo "<p style='color:green;'>Valid email: " . htmlspecialchars($email) . "</p>";
        }
 }
 ?>
 </body>
 </html>