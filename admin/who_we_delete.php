<?php
include 'config.php';
$id = $_GET['id'];
// -------------------------main Room----------------
mysqli_query($conn, "DELETE FROM `who_we` WHERE id = $id");

header('location:who_we.php'); 

?>
