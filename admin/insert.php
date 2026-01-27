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
else if (isset($_POST['home_service'])) {

    $TITLE  = $_POST['title'];
    $PARA = $_POST['para'];
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

// Blog Insertion Code
else if (isset($_POST['who_we'])) {

    $TITLE  = $_POST['title'];
    $PARA1 = $_POST['para1'];
    $PARA2 = $_POST['para2'];
    $PARA3 = $_POST['para3'];

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);

    mysqli_query(
        $conn,
        "INSERT INTO who_we
        (title ,para1,para2,para3, image)
        VALUES
        ('$TITLE','$PARA1','$PARA2','$PARA3','$img_des')"
    );

    header('location:who_we.php');
}
