<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <a href="logout.php">Logout</a>

    <!-- Admin functionality here -->
</body>
</html>
