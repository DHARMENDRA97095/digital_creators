<?php
// Database connection
 include_once __DIR__ .'\..\..\config.php';


function get_public_testimonials($limit = 6) {
    global $conn;
    
    // Get current page from URL
    $page = isset($_GET['review_page']) ? (int)$_GET['review_page'] : 1;
    if($page < 1) $page = 1;
    $offset = ($page - 1) * $limit;

    // Total Approved Count
    $total_res = mysqli_query($conn, "SELECT COUNT(*) as total FROM testimonials WHERE status = 1");
    $total_rows = mysqli_fetch_assoc($total_res)['total'];
    $total_pages = ceil($total_rows / $limit);

    // Fetch Only Approved
    $sql = "SELECT * FROM testimonials WHERE status = 1 ORDER BY id DESC LIMIT $offset, $limit";
    $result = mysqli_query($conn, $sql);
    
    $data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    return [
        'data' => $data,
        'total_pages' => $total_pages,
        'current_page' => $page,
        'total_records' => $total_rows
    ];
}
?>