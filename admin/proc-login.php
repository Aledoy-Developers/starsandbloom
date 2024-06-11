<?php

include("connect.php");

$username = $_POST["user"];
$password = $_POST["pass"];

if(!$username || !$password)
{
    $error_msg = "You are expected to fill in the details";
    include("login.php");
    exit;
}

$query_chk = "select * from participant where fullname = '$username' ";
$result_chk = mysqli_query($conn,$query_chk);
$num_chk = mysqli_num_rows($result_chk);

if ($num_chk > 0)
{
    include("dashboard.php");
    exit;
}






?>