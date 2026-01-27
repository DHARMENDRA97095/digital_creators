<?php

include 'config.php';

if (isset($_POST['upload'])) {

    $PARA  = $_POST['para'];

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);
    print_r("image location");

    mysqli_query(
        $conn,
        "INSERT INTO logoimage
        (para, image)
        VALUES
        ('$PARA', '$img_des')"
    );

    header('location:admin_page.php');
}

// Blog Insertion Code
if (isset($_POST['home_service'])) {

    $TITLE  = $_POST['title'];
    $PARA = $_POST['para'];   // mapped to title
    $LINK  = $_POST['link'];

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);

    mysqli_query(
        $conn,
        "INSERT INTO home_services
        (title ,para, link, image)
        VALUES
        ('$TITLE','$PARA','$LINK','$img_des')"
    );

    header('location:home_services.php');
}
