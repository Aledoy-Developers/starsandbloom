<?php

session_start();

include("connect.php");

$username = $_SESSION['valid_user'];

$password = $_POST["password"];
$new_password = $_POST["new_password"];
$confirm_password = $_POST["confirm_password"];

// if(!$password || !$new_password || $confirm_password)
// {
//     $con_error = "Please fill in the details";
//     include("setting.php");
//     exit;
// }

if($new_password != $confirm_password)
{
    $pass_error = "Password doesn't match.";
    include("setting.php");
    exit;
}

$query_chk = "select * from login where username = '$username'";
$result_chk = mysqli_query($conn,$query_chk);
$row_chk = mysqli_fetch_array($result_chk);

if($row_chk['password'] != $password)
{
    $error_ms = "Password Incorrect";
    include("setting.php");
    exit;
}

else{
    $update = "update login set password = '$new_password' where username = '$username'";
    $update_chk = mysqli_query($conn, $update);

    if($update_chk){
        $up_success= "Password changed successfully.";
        include("setting.php");
        exit;
    }
}


?>