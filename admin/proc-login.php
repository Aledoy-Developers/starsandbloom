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

$query_chk = "select * from login where username = '$username' and password = '$password'";
$result_chk = mysqli_query($conn,$query_chk);
$num_chk = mysqli_num_rows($result_chk);

if ($num_chk > 0)
{
    $_SESSION['valid_user'] = $username;
    header("Location: dashboard.php");
    exit;
}

else{
    $error = "Login invalid"; 
    include("login.php");
    exit;
}






?>