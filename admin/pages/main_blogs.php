<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email'])) {
    header("Location: index.php");
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

            <label for="name">Heading :</label>
            <input type="text" name="title"><br><br>

            <label for="para">Content1:</label>
            <input type="text" name="para1" ><br><br>

            <label for="para">Content2:</label>
            <input type="text" name="para2" ><br><br>

            <label for="para">Content3:</label>
            <input type="text" name="para3" ><br><br>

            <label for="">Date:</label>
            <input type="date" name="blog_date"> <br><br>

            <label for="image">Image :</label>
            <input type="file" name="image"><br><br>

            <label for="">Link :</label>
            <input type="text" name="link" placeholder="Enter link"> <br><br>

            <button type="submit" name="main_blogs" class="btn btn-success">
                Add Property
            </button>

        </form>
    </section>



    <!-- ----------Fetch Data ------------------- -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>

                <th scope="col">Id</th>
                <th scope="col">Heading</th>
                <th scope="col">Content1</th>
                <th scope="col">Content2</th>
                <th scope="col">Content3</th>
                <th scope="col">Date</th>
                <th scope="col">Image</th>
                <th scope="col">Link</th>

                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <?php

        include 'config.php';

        $pic = mysqli_query($conn, "SELECT * FROM `main_blogs`");

        while ($row = mysqli_fetch_assoc($pic)) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['para1']}</td>
                    <td>{$row['para2']}</td>
                    <td>{$row['para3']}</td>
                    <td>{$row['blog_date']}</td>
                    <td><img src='{$row['image']}' height='100' width='100'></td>
                    <td>{$row['link']}</td>

                    
                    <td><a href='main_blogs_delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>

                </tr>
                ";
        }
        ?>
</body>

</html>