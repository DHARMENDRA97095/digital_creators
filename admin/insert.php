<?php

include 'config.php';

if (isset($_POST['upload'])) {

    $PARA  = $_POST['para'];

    $img_loc  = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des  = "uploadimage/" . $img_name;

    move_uploaded_file($img_loc, $img_des);

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
// if (isset($_POST['insert'])) {

//     $TITLE = $_POST['para'];   // mapped to title
//     $PARA  = $_POST['description'];
//     $DATE  = $_POST['blog_date'];

//     $img_loc  = $_FILES['image']['tmp_name'];
//     $img_name = $_FILES['image']['name'];
//     $img_des  = "uploadimage/" . $img_name;

//     move_uploaded_file($img_loc, $img_des);

//     mysqli_query(
//         $conn,
//         "INSERT INTO blog_main
//         (para, blog_date, description, image)
//         VALUES
//         ('$TITLE','$DATE', '$PARA', '$img_des')"
//     );

//     header('location:admin-property.php');
// }
