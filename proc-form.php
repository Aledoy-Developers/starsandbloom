<?php
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
        
        
    $conn = mysqli_connect("localhost", "starsandbloom", "valentine", "starsandbloom");
        if (!$conn){
            echo "cannot connect to the server";
            }
            
     $query_chk = "select * from participant where email ='$email' or phone= '$phone' ";
     $result_chk = mysqli_query($conn,$query_chk); 
        $num_chk = mysqli_num_rows($result_chk);
    if ($num_chk > 0)
    {
        $error = 'User already exist';
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
