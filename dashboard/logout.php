<?php
session_start();

// Check if user confirmed logout
if(isset($_POST['confirm_logout'])) {
    session_unset(); // Unset all session variables
    session_destroy(); // Destroy the session
    header("Location: ../login.php"); // Redirect to login page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            background-color:rgb(126, 124, 141);
        } */
    .logout-container {
      border: 4px rgb(126, 124, 141);
      border-radius: 10px;
      padding: 30px;
      background-color:rgb(126, 124, 141);
      box-shadow: 0px 4px 10px rgba(0, 0, 255, 0.2);
    }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="logout-container text-center">
            <h3 >Are you sure you want to logout?</h3>
            <form method="POST">
                <button type="submit" style="font-weight: bold" name="confirm_logout" class="btn btn-danger">Yes</button>
                <a href="../dashboard/index.php"  style="font-weight: bold" class="btn btn-secondary">No</a>
            </form>
        </div>
    </div>
</body>
</html>
