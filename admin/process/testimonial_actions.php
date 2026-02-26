<?php
session_start();
require_once '../config.php';

if (!isset($_SESSION['email'])) { exit("Unauthorized"); }

// 1. AJAX Status Toggle
if (isset($_POST['toggle_status'])) {
    $id = (int)$_POST['id'];
    $status = (int)$_POST['status'];
    mysqli_query($conn, "UPDATE testimonials SET status = $status WHERE id = $id");
    echo "Success";
    exit;
}

// 2. ADD TESTIMONIAL
if (isset($_POST['save_testimonial'])) {
    $name    = mysqli_real_escape_string($conn, $_POST['name']);
    $role    = mysqli_real_escape_string($conn, $_POST['role']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $stars   = (int)$_POST['stars'];
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $status  = 0; // Default unchecked/unapproved
    
    $image_name = "default-user.png";
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = time() . "_" . uniqid() . "." . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], "../../assest/image/clients/" . $image_name);
    }

    $sql = "INSERT INTO testimonials (name, role, company, stars, content, image_path, status) 
            VALUES ('$name', '$role', '$company', '$stars', '$content', '$image_name', '$status')";

    mysqli_query($conn, $sql);
    header("Location: ../Dashboard.php?page=manageTestimonials&status=success");
}

// 3. DELETE
if (isset($_GET['delete_id'])) {
    $id = (int)$_GET['delete_id'];
    mysqli_query($conn, "DELETE FROM testimonials WHERE id = $id");
    header("Location: ../Dashboard.php?page=manageTestimonials&status=deleted");
}