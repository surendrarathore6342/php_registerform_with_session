<?php
include("config.php");  

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $sql = "INSERT INTO login (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}

// $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <h2>Signup</h2>
    <form method="POST" action="signup_form.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" required>
        
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <br>

        <!-- <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required> -->
        
        <br>

        <input type="submit" value="Signup">
    </form>
</body>
</html>
