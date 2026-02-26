<?php 

    // $password = "Dkp@97095";
    // $user = "hrntechs_DHARMENDRA_97095";
    // $host = "localhost";
    // $database = "hrntechs_digital_creators";

    $password="";
    $user="root";
    $host="localhost";
    $database="digital_creators";

    $conn = new mySqli($host, $user, $password, $database);

    if($conn->connect_error)
    {
        echo "Hello Digital Creators Family";
        die("connection Failed ". $conn->connect_error );
    }
    return ($conn);

?>