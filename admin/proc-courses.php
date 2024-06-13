<?php

$courses = $_POST["courses"];
$date_selected = $_POST["date"];
$description = $_POST["description"];

if(!$courses || $date_selected || $description)
{
    $course_error = "Please fill in the fields.";
    include("add-courses.php");
    exit;
}

?>