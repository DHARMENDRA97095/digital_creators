<?php
include "admin/config.php";

if (isset($_POST['form_submit'])) {

    // ✅ Collect & sanitize input
    $name    = trim($_POST['name']);
    $email   = trim($_POST['email']);
    $phone   = trim($_POST['phone']);
    $message = trim($_POST['message']);

    // ✅ Basic validation
    if ($name == "" || $email == "" || $phone == "" || $message == "") {
        die("All fields are required.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    // ✅ Prepared Statement (SQL Injection Safe)
    $stmt = $conn->prepare(
        "INSERT INTO contact_customer_list (name, email, phone, message) VALUES (?, ?, ?, ?)"
    );

    $stmt->bind_param("ssss", $name, $email, $phone, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
