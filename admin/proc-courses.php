<?php

session_start();

include("connect.php");

$courses = $_POST["courses"];
$date_selected = $_POST["date"];
$description = $_POST["description"];

if(!$courses || !$date_selected || !$description)
{
    $course_error = "Please fill in the fields.";
    include("add-courses.php");
    exit;
}

 $query_chk = "insert into courses (courses, available_dates) values ('$courses', '$date_selected') ";
 $result_chk = mysqli_query($conn,$query_chk);

if ($result_chk) {
    include('courses.php');
    exit;
}