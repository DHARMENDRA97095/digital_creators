<?php

// $password = "Dkp@97095";
// $user = "hrntechs_DHARMENDRA_97095";
// $host = "localhost";
// $database = "hrntechs_digital_creators";

$host = "localhost";
$user = "root";
$password = "";
$database = "digital_creators";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
