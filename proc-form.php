<?php

session_start();
    include ("admin/connect.php");

    $name = $_SESSION['name'] = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $courses = $_POST["courses"];
    $date_selected = $_POST["date_selected"];

    
    $query = "select * from courses where courses = '$courses'";
    $result = mysqli_query($conn,$query);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_array($result);
    $price = $row['price'];

    $names = explode(' ',$name);
    $firstname = $names[0];
    $lastname = $names[1];

    if (!$name || !$email || !$phone || !$courses || !$date_selected )
    {
        $error_msg= "You are expected to fill in the form";
        include("index.php");
        exit;
        }
        


        $query = "insert into participant set fullname = '$name', email = '$email', phone = '$phone', courses='$courses', date= '$date_selected'";
      
        $result = mysqli_query($conn, $query);
        
        if ($result){
            include ("pay.php");
            exit;
            }
            
            ?> 
