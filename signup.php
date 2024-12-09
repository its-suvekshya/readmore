<?php
// signup.php
include("db.php"); 

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get and sanitize user input
    // $username = mysqli_real_escape_string($con, $_POST['username']); 
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert into the database
    $sql = "INSERT INTO admin (full_name, email, password) VALUES ('$full_name', '$email', '$hashed_password')";
    
    if (mysqli_query($con, $sql)) {
        // Successful registration
        echo "User registered successfully!";
      
        header("Location: index.php");
        exit();
    } else {
        // Handle errors gracefully
        echo "Error: " . mysqli_error($con);
    }
}
?>
