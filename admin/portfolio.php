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
        <h1>Portfolio Service Add</h1>
        <form action="insert.php" method="POST" enctype="multipart/form-data">

            <label for="name">Data-Category:</label>
            <input type="text" name="data_category"><br><br>

            <label for="para">Badge:</label>
            <input type="text" name="badge"><br><br>

            <label for="title">Title:</label>
            <input type="text" name="title"><br><br>

            <label for="para">Content:</label>
            <input type="text" name="para"><br><br>

            <label for="tag">Tag1:</label>
            <input type="text" name="tag1"><br><br>

            <label for="para">Tag2:</label>
            <input type="text" name="tag2"><br><br>

            <label for="para">Tag3:</label>
            <input type="text" name="tag3"><br><br>

            <label for="para">Tag4:</label>
            <input type="text" name="tag4"><br><br>

            <label for="para">Tag5:</label>
            <input type="text" name="tag5"><br><br>

            <label for="">Link :</label>
            <input type="text" name="link" placeholder="Enter link"> <br><br>

            <label for="image">Image :</label>
            <input type="file" name="image"><br><br>

            <button type="submit" name="portfolio" class="btn btn-success">
                Add Property
            </button>

        </form>
    </section>



    <!-- ----------Fetch Data ------------------- -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>

                <th scope="col">Id</th>
                <th scope="col">Data Category</th>
                <th scope="col">Badge</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Tag1</th>
                <th scope="col">Tag2</th>
                <th scope="col">Tag3</th>
                <th scope="col">Tag4</th>
                <th scope="col">Tag5</th>
                <th scope="col">Link</th>
                <th scope="col">Image</th>

                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>

        <?php

        include 'config.php';

        $pic = mysqli_query($conn, "SELECT * FROM `portfolio`");

        while ($row = mysqli_fetch_assoc($pic)) {
            echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['data_category']}</td>
                    <td>{$row['badge']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['para']}</td>
                    <td>{$row['tag1']}</td>
                    <td>{$row['tag2']}</td>
                    <td>{$row['tag3']}</td>
                    <td>{$row['tag4']}</td>
                    <td>{$row['tag5']}</td>
                    <td>{$row['link']}</td>
                    <td><img src='{$row['image']}' height='100' width='100'></td>

                    
                    <td><a href='portfolio_delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='update.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>

                </tr>
                ";
        }
        ?>
</body>

</html>