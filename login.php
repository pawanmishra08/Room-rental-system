<?php
session_start();
if(!empty($_SESSION['email'])) {
    header("location:dashboard/index.php");
}
include "connection.php";
if(isset($_POST['login'])){
    // print_r($_POST);
    // die();
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM `admin` WHERE `email`= '$email'";

    $result = $conn->query($sql);
    if(mysqli_num_rows($result)>0){
        $data= $result->fetch_assoc();

        if(!empty($data['email']))
        {
            if($pass ==$data['password'])
            {
                $_SESSION['email'] = $email;
                $_SESSION['name'] = $data['name'];
                header("location: dashboard/index.php");
                exit();
            } else {
                echo "password does not match!!!";
            }
        }
    } else {
        echo "email does not match!";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Rental System - Login</title>
    <link rel="stylesheet" href="assests/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Room Rental System</h2>
        <form action="" method="POST">

            <div class="input-group">
                <label for="email" style="font-weight: bold;">Email</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email here!">
            </div>
            <div class="input-group">
                <label for="password"style="font-weight: bold;">Password</label>
                <input type="password" id="password" name="password" required placeholder ="Enter the password">
            </div>
            <button type="submit" name="login" class="login-btn">Login</button>
            <!-- <p class="register-link">Don't have an account? <a href="register.html">Register</a></p> -->
        </form>
    </div>

</body>
</html>