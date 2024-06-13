<?php

session_start();

include("connect.php");

$username = $_SESSION['valid_user'];

$password = $_POST["password"];
$new_password = $_POST["new_password"];
$confirm_password = $_POST["confirm_password"];

if($new_password != $confirm_password)
{
    $pass_error = "Password doesn't match.";
    include("setting.php");
    exit;
}

$query_chk = "select * from login where username = '$username' and password = '$password'";
$result_chk = mysqli_query($conn,$query_chk);
$row_chk = mysqli_fetch_array($result_chk);

if($result_chk)
{
    $error_ms = "Password Incorrect";
    include("setting.php");
    exit;
}

?>