<?php
session_start();

include("connect.php");


if(!isset($_SESSION['valid_user']))
{
    $admin_error = "Your session has timed out, please log in again.";
    include("login.php");
    exit;
}

$id = $_GET['id'];
$name = $_GET['name'];

$query = "delete from participant where id = '$id'";
$result = mysqli_query($conn,$query);

if($result)
{
    $success = $name.' has been removed';
    include('dashboard.php');
    exit;
}
else
{
    echo 'Something wrong';
}



?>
