<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: homepage.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to <b>Notey. 📝<</b> .</h1>
    <p>
        <a href="newNotes.php" class="btn btn-success ml-3">Create new note</a>
        <a href="notes.php" class="btn btn-info ml-3">View all note</a>
        <a href="resetPassword.php" class="btn btn-warning ml-3">Reset Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>
