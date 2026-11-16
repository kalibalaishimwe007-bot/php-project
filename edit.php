<?php
include("connection.php");

$id = $_GET['id'];
// insert updated data
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    $course = $_POST['course'];

    if (!empty($name) && !empty($email) && !empty($course)) {
        $sql = "UPDATE students SET name='$name', email='$email', course='$course' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            header("Location: register.php");
        } else {
            echo "fail to Update";
        }
    }
}
// fetch data
$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f3eaff;
            margin: 0;
            padding: 40px 15px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(80, 30, 130, 0.12);
        }

        h2 {
            text-align: center;
            color: #6a0dad;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 11px;
            border: 1px solid #d6c2ed;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            background-color: #fff;
        }

        input:focus,
        select:focus {
            border-color: #8a2be2;
            box-shadow: 0 0 5px rgba(138, 43, 226, 0.2);
        }

        .update-btn {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background-color: #6a0dad;
            color: white;
            border: 2px solid #6a0dad;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .update-btn:hover {
            background-color: white;
            color: #6a0dad;
        }

        .cancel {
            display: block;
            text-align: center;
            margin-top: 18px;
            color: #6a0dad;
            text-decoration: none;
            font-size: 14px;
        }

        .cancel:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <form method="post">
        <h2>Update Form</h2>

        <div class="form-group">
            <label for="name">Full Name:</label>
            <input
                type="text"
                id="name"
                name="name"
                value="<?php echo htmlspecialchars($row['name']); ?>"
                required
            >
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?php echo htmlspecialchars($row['email']); ?>"
                required
            >
        </div>

        <div class="form-group">
            <label for="password">Enter your password:</label>
            <input
                type="password"
                id="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="course">Select Course:</label>
            <select name="course" id="course" required>
                <option value="">Select Your Course</option>
                <option value="PHP" <?php if ($row['course'] == 'PHP') echo 'selected'; ?>>PHP</option>
                <option value="DJANGO" <?php if ($row['course'] == 'DJANGO') echo 'selected'; ?>>DJANGO</option>
                <option value="REACT" <?php if ($row['course'] == 'REACT') echo 'selected'; ?>>REACT</option>
                <option value="PYTHON" <?php if ($row['course'] == 'PYTHON') echo 'selected'; ?>>PYTHON</option>
            </select>
        </div>

        <button type="submit" name="update" class="update-btn">
            Update
        </button>

        <a href="register.php" class="cancel">Cancel</a>
    </form>

</body>
</html>
`