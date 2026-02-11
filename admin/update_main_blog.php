<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <?php
    include 'config.php';
    $id = $_GET['id'];
    $Record = mysqli_query($conn, "SELECT * FROM `main_blogs` WHERE id = $id");
    $data = mysqli_fetch_array($Record);

    ?>

    <section>

        <div class="admin-main">
            <h1>Room ADD</h1>
            <form action="update1.php" method="post" enctype="multipart/form-data">

                <label for="para">Heading: </label>
                <input type="text" name="title" value="<?php echo $data['title']; ?>" placeholder="Enter Services Name"> <br><br>

                <label for="para">Content1</label>
                <input type="text" name="para1" value="<?php echo $data['para1']; ?>" placeholder="Enter Content1"> <br><br>

                <label for="para">Content2</label>
                <input type="text" name="para2" value="<?php echo $data['para2']; ?>" placeholder="Enter Content2"> <br><br>

                <label for="para">Content3</label>
                <input type="text" name="para3" value="<?php echo $data['para3']; ?>" placeholder="Enter Content3"> <br><br>

                <label for="">Date:</label>
                <input type="date" name="blog_date" value="<?php echo $data['blog_date'];?>"> <br><br>

                <label for="">Link :</label>
                <input type="text" name="link" value="<?php echo $data['link']; ?>" placeholder="Enter Update link"> <br><br>

                <label for="image">Image :</label>
                <input type="file" name="image" value="<?php echo $data['image'] ?>" required>
                <img src="<?php echo $data['image'] ?>" alt="" height="200" width="250"><br><br>

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                <button type="submit" name="update_main_blog" class="btn btn-danger">Update</button>
            </form>
        </div>
    </section>

</body>

</html>