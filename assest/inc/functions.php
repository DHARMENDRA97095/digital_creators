<?php
$custom_css_files = [];
$custom_js_files = [];

// WordPress style enqueue function
function enqueue_custom_css($path) {
    global $custom_css_files;
    if (!in_array($path, $custom_css_files)) $custom_css_files[] = $path;
}

function enqueue_custom_js($path) {
    global $custom_js_files;
    if (!in_array($path, $custom_js_files)) $custom_js_files[] = $path;
}

// Yeh function header me call hoga
function wp_head_css() {
    global $custom_css_files;
    foreach ($custom_css_files as $css) {
        echo '<link rel="stylesheet" href="' . $css . '">' . PHP_EOL;
    }
}

// Yeh function footer me call hoga
function wp_footer_js() {
    global $custom_js_files;
    foreach ($custom_js_files as $js) {
        echo '<script src="' . $js . '"></script>' . PHP_EOL;
    }
}

// Testimonials Data

// Database connection require karo (agar pehle se nahi hai)
require_once './db.php'; 

/**
 * Service Layer: Get Approved Testimonials
 * Why: Isse presentation logic (HTML) database logic se alag rehta hai (SRP).
 * Principle: Dependency Inversion - UI database par depend nahi karta, is function par karta hai.
 */
function get_testimonials() {
    global $conn;
    $data = [];

    // Sirf Approved (status = 1) data fetch karenge
    $sql = "SELECT name, role, company, content as text, image_path as img, stars 
            FROM testimonials 
            WHERE status = 1 
            ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Path fix: Database mein sirf name hota hai, yahan full path banayenge
            $row['img'] = "assest/image/clients/" . $row['img'];
            $data[] = $row;
        }
    }

    return $data; // Hamesha array return karega, chahe khali ho
}