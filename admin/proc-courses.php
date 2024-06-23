<?php

session_start();

include("connect.php");

$courses = $_POST["courses"];
$date_selected = $_POST["date"];
$description = $_POST["description"];
$price = $_POST['price'];

if(!$courses || !$date_selected || !$description)
{
    $course_error = "Please fill in the fields.";
    include("add-courses.php");
    exit;
}
$query = "select * from courses where courses = '$courses'"; 
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);

if ($num >0)
{
    $error_msg = "Course has already been registered";
    include('add-courses.php');
    exit;

}
 $query_chk = "insert into courses (courses, available_dates, description, price) values ('$courses', '$date_selected', '$description', '$price') ";
 $result_chk = mysqli_query($conn,$query_chk);

if ($result_chk) {
    $course_success = "Course have been added successfully";
    include('courses.php');
    exit;
}

else{
    echo "Service temporarily unavailable";
}

