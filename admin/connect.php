<?php        
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED & ~E_WARNING);
// ini_set('display_errors', 1);
ini_set('display_errors', 0);

    // $conn = mysqli_connect("localhost", "starsandbloom_starsbloom", "Administrator123", "starsandbloom_starsbloom");
    //     if (!$conn){
    //         echo "cannot connect to the server";
    //     }
        
    $conn = mysqli_connect("localhost", "starsandbloom", "valentine", "starsandbloom");
        if (!$conn){
            echo "cannot connect to the server";
        }
            
        ?>