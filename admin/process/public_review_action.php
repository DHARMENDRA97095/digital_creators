<?php
require_once '../assest/inc/db_config.php';

if (isset($_POST['submit_public_review'])) {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $role    = mysqli_real_escape_string($conn, $_POST['role']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $stars   = (int)$_POST['stars'];
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status  = 0; // STRICTLY UNAPPROVED BY DEFAULT

    // Image Upload Logic
    $image_name = "default-user.png";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = "user_" . time() . "." . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], "../assest/image/clients/" . $image_name);
    }

    $sql = "INSERT INTO testimonials (name, role, company, stars, content, image_path, status) 
            VALUES ('$name', '$role', '$company', '$stars', '$content', '$image_name', '$status')";

    if (mysqli_query($conn, $sql)) {
        // Success Message ke saath wapas bhejo
        echo "<script>alert('Thank you! Your review is submitted and pending for approval.'); window.location.href='../index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}