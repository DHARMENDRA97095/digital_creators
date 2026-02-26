<?php
require_once '../config.php';

if (isset($_POST['submit_review'])) {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $role    = mysqli_real_escape_string($conn, $_POST['role']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $stars   = (int)$_POST['stars'];
    $status  = 0; // Default pending

    // Image Upload
    $img_name = 'default.png';
    if(!empty($_FILES['image']['name'])) {
        $img_name = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], '../assest/image/clients/' . $img_name);
    }

    $query = "INSERT INTO testimonials (name, role, company, content, stars, image_path, status) 
              VALUES ('$name', '$role', '$company', '$content', '$stars', '$img_name', '$status')";

    if(mysqli_query($conn, $query)) {
        header("Location: ../index.php?msg=Review submitted for approval");
    }
}