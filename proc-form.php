<?php

    include ("admin/connect.php");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $courses = $_POST["courses"];
    $date_selected = $_POST["date_selected"];

    if (!$name || !$email || !$phone || !$courses || !$date_selected )
    {
        $error_msg= "You are expected to fill in the form";
        include("index.php");
        exit;
        }
        


        $query = "insert into participant set fullname = '$name', email = '$email', phone = '$phone', courses='$courses', date= '$date_selected'";
        
        $result = mysqli_query($conn, $query);
        
        if ($result){
            $success = "Thanks, your information has been received";
            include ("index.php");
            exit;
            }
            
            ?> 
