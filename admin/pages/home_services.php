<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email'])) {
    header("Location: ../admin/index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Service</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section>
        <h1>Home Services Property Add</h1>
        <form action="insert.php" method="POST" enctype="multipart/form-data">

        <label for="name">Service Name :</label>
            <input type="text" name="title" placeholder="Service Name"><br><br>

            <label for="para">Content:</label>
            <input name="para" placeholder="Enter Content"></input><br><br>

            <label for="image">Image :</label>
            <input type="file" name="image"><br><br>

            <label for="">Link :</label>
            <input type="text" name="link" placeholder="Enter link"> <br><br>

            <button type="submit" name="home_service" class="btn btn-success">
                Add Property
            </button>

        </form>
    </section>



    <!-- ----------Fetch Data ------------------- -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>

                <th scope="col">Id</th>
                <th scope="col">Service Name</th>
                <th scope="col">Para</th>
                <th scope="col">Image</th>
                <th scope="col">Link</th>

                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <?php

        include 'config.php';

        $pic = mysqli_query($conn, "SELECT * FROM `home_services`");

        while ($row = mysqli_fetch_assoc($pic)) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['para']}</td>
                    <td><img src='{$row['image']}' height='100' width='100'></td>
                    <td>{$row['link']}</td>

                    
                    <td><a href='home_services_delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='./update_home_services.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>

                </tr>
                ";
        }
        ?>
</body>

</html>