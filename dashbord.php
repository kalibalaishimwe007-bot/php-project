<?php

session_start();


header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");


if (!isset($_SESSION['stu_id'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
   <script>
    window.addEventListener("pageshow", function(event) {

        if (event.persisted) {
            window.location.reload();
        }

    });
</script>
</head>
<body>

    <h2>Welcome, <?php echo htmlspecialchars($username); ?></h2>

    <a href="register.php">List of Students</a>

    <a href="logout.php">Logout</a>

</body>
</html>