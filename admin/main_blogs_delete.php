<?php
include 'config.php';
$id = $_GET['id'];
// -------------------------main Room----------------
mysqli_query($conn, "DELETE FROM `main_blogs` WHERE id = $id");

header('location:main_blogs.php'); 

?>
