<?php
include 'config.php';
$id = $_GET['id'];
// -------------------------main Room----------------
mysqli_query($conn, "DELETE FROM `logoimage` WHERE id = $id");

header('location:../admin/Dashboard.php'); 

?>