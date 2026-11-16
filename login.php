<?php

include("connection.php");

session_start();
# is button clicked
if(isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    if (!empty($username) && !empty($password)) {
        $sql = "SELECT * FROM students WHERE name = '$username'";

        $result = mysqli_query($conn, $sql);
       
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);

            if (password_verify($password, $row['password'])) {
                $_SESSION['stu_id'] = $row['id'];
                $_SESSION['username'] = $row['name'];

                header("Location: dashbord.php");
                exit();
            } else {
                echo " incorrect password";
            }
        } else {
            echo "username not found";
        } 
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    
    <form method="post">
        <h1>Login Form</h1>

        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <button type="submit" name="login">Login</button>
         <p>Don't have have an account?</p> click here <a href="index.php" class="link">register</a>
    </form>
</body>
</html>