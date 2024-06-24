<?php

session_start();
include("connect.php");


$courses = $_POST["courses"];
$description = $_POST["description"];
$date_selected = $_POST["date"];
$price = $_POST['price'];
$id = $_POST['id'];

if (!$courses || !$description || !$date_selected)
{
    $error_msg = "You are required to fill in the details.";
    include("edit-courses.php");
    exit;
}


$update = mysqli_query($conn,"UPDATE courses SET courses='$courses', description='$description', available_dates='$date_selected', price='$price' WHERE id = '$id'");
if ($update)
{
    $success ="Course Edited Successfully";
    include("courses.php");
    exit;
}


?>