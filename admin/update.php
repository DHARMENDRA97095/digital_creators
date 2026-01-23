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
    $Record = mysqli_query($conn, "SELECT * FROM `logoimage` WHERE id = $id");
    $data = mysqli_fetch_array($Record);

    ?>

    <section>

        <div class="admin-main">
            <h1>Room ADD</h1>
            <form action="update1.php" method="post" enctype="multipart/form-data">
            
                <label for="para">Content</label>
                <input type="text" name="para" value="<?php echo $data['para']; ?>" placeholder="Enter Content for Footer"> <br><br>

                <label for="image">Image :</label>
                <input type="file" name="image" value="<?php echo $data['image'] ?>" required>
                <img src="<?php echo $data['image'] ?>" alt="" height="200" width="250"><br><br>

                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                    <button type="submit" name="update" class="btn btn-danger">Update</button>
            </form>
        </div>
    </section>

</body>

</html>