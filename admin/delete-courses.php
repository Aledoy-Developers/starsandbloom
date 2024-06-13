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
$courses = $_GET['courses'];

$query = "delete from courses where id = '$id'";
$result = mysqli_query($conn,$query);

if($result)
{
    $success = $courses.' has been removed';
    include('courses.php');
    exit;
}
else
{
    echo 'Something wrong';
}



?>
