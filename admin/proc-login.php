<?php

session_start();

include("connect.php");

$username = $_POST["user"];
$password = $_POST["pass"];

if(!$username || !$password)
{
    $error_msg = "You are expected to fill in the details";
    include("login.php");
    exit;
}

$query_chk = "select * from login where username = '$username'";
$result_chk = mysqli_query($conn,$query_chk);


if ($result_chk)
{
    $row = mysqli_fetch_assoc($result_chk);
    $stored_hashed_password = $row['password'];

    if (password_verify($password, $stored_hashed_password)) {
        $_SESSION['valid_user'] = $username;
        header("Location: dashboard.php");
        exit;

    } else {
       $error = "Login invalid";
       include("login.php");
       exit;
    }
   
}

else{
    $error = "Login invalid"; 
    include("login.php");
    exit;
}






?>