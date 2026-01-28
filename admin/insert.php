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

// Portfolio Insertion Code
else if (isset($_POST['portfolio'])) {

    $DATA_CATEGORY  = $_POST['data_category'];
    $BADGE = $_POST['badge'];
    $TITLE = $_POST['title'];
    $PARA = $_POST['para'];
    $TAG1 = $_POST['tag1'];
    $TAG2 = $_POST['tag2'];
    $TAG3 = $_POST['tag3'];
    $TAG4 = $_POST['tag4'];
    $TAG5 = $_POST['tag5'];
    $LINK = $_POST['link'];

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);

    mysqli_query(
        $conn,
        "INSERT INTO portfolio
        (data_category,badge,title,para,tag1,tag2,tag3,tag4,tag5,link, image)
        VALUES
        ('$DATA_CATEGORY','$BADGE','$TITLE','$PARA','$TAG1','$TAG2','$TAG3','$TAG4','$TAG5','$LINK','$img_des')"
    );

    header('location:portfolio.php');
}
