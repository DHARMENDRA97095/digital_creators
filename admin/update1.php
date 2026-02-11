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


// SIngle Blog Update 
if (isset($_POST['update_main_blog'])) {

    $id    = $_POST['id'];
    $TITLE  = $_POST['title'];
    $PARA1  = $_POST['para1'];
    $PARA2  = $_POST['para2'];
    $PARA3  = $_POST['para3'];
    $BLOG_DATE = $_POST['blog_date'];
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
        UPDATE `main_blogs`
        SET 
            `title` = '$TITLE',
            `para1` = '$PARA1',
            `para2` = '$PARA2',
            `para3` = '$PARA3',
            `blog_date` = '$BLOG_DATE',
            `link` = '$LINK',
            `image` = '$img_des'
        WHERE `id` = $id
    ";

    mysqli_query($conn, $update_query);

    header("Location: dashboard.php");
}


// Team Member Update 
if (isset($_POST['update_team'])) {

    $id    = $_POST['id'];
    $NAME  = $_POST['name'];
    $POSITION  = $_POST['position'];
    $DESCRIPTION  = $_POST['description'];
    $MOBILE  = $_POST['mobile'];
    $EMAIL  = $_POST['email'];

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
        UPDATE `team`
        SET 
            `name` = '$NAME',
            `position` = '$POSITION',
            `description` = '$DESCRIPTION',
            `email` = '$EMAIL',
            `mobile` = '$MOBILE',
            `image` = '$img_des'
        WHERE `id` = $id
    ";

    mysqli_query($conn, $update_query);

    header("Location: dashboard.php");
}
