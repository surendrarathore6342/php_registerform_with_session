<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =$_POST['username'];
    $password =$_POST['password'];

    // Retrieve user information from the database
    $sql = "SELECT * FROM login WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        if ($row['username'] === $username && $row['password'] === $password) {

            echo "Logged in!";

            $_SESSION['username'] = $row['username'];

            $_SESSION['password'] = $row['password'];
        }else{

            echo"not connect";
        }

    }

}


// $conn->close();
?>   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="login_form.php">
        <label for="username">Username:</label>
        <input type="text" name="username" required>
        
        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>
        
        <br>

        <input type="submit" value="Login">
    </form>
</body>
</html>
