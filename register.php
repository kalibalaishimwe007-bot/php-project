<?php

include("connection.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $course = $_POST['course'];
   

    if (!empty($name) && !empty($email) && !empty($password)&& !empty($course)) {
        $sql = "INSERT INTO students (name, email,password, course) VALUES ('$name', '$email','$password' ,'$course')";
        if (mysqli_query($conn, $sql)) {
            // echo "Successfully registered";
        } else {
            // echo "fail to register";
        }
    }
}

?>


<?php
include("connection.php");
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST OF STUDENTs</title>
</head>
<body>
    <p>
        <a href="index.php">Register new student</a>
    </p>
    <table border="" cellspacing="0" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>password</th>
                <th>Course</th>
                <th>Action</th>
            </tr>
            <tr>
                <tbody>
                    <?php
            if (mysqli_num_rows($result) > 0) {
                $count=1;
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $count++. "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    ?>
                    <td>********</td>
                    <?php
                    echo "<td>" . $row['course'] . "</td>";
                    echo "<td>
                            <a href='edit.php?id=" . $row['id'] . "'>Edit</a>  
                            <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
                    } else {
                        echo "<tr><td>No records found</td></tr>";
                    }

                    ?>
                
                </tbody>
            </tr>
            
        </thead>
    </table>
</body>
</html>