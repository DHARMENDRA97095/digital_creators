<?php
include 'config.php';

if (isset($_POST['update'])) {

    $id    = $_POST['id'];
    $para  = $_POST['para'];

    // Image upload
    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];

    if (!empty($img_name)) {
        $img_des = "uploadimage/" . $img_name;
        move_uploaded_file($img_loc, $img_des);
    } else {
        $img_des = $_POST['old_image'];
    }

    $update_query = "
        UPDATE `logoimage`
        SET 
            `para` = '$para',
            `image` = '$img_des'
        WHERE `id` = $id
    ";

    mysqli_query($conn, $update_query);

    header("Location: admin_page.php");
}


// Home Services Update 
if (isset($_POST['update_home_services'])) {

    $id    = $_POST['id'];
    $TITLE  = $_POST['title'];
    $PARA  = $_POST['para'];
    $LINK  = $_POST['link'];

    // Image upload
    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];

    if (!empty($img_name)) {
        $img_des = "uploadimage/" . $img_name;
        move_uploaded_file($img_loc, $img_des);
    } else {
        $img_des = $_POST['old_image'];
    }

    $update_query = "
        UPDATE `home_services`
        SET 
            `title` = '$TITLE',
            `para` = '$PARA',
            `link` = '$LINK',
            `image` = '$img_des'
        WHERE `id` = $id
    ";

    mysqli_query($conn, $update_query);

    header("Location: dashboard.php");
}
