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
    $Record = mysqli_query($conn, "SELECT * FROM `team` WHERE id = $id");
    $data = mysqli_fetch_array($Record);

    ?>

    <section>

        <div class="admin-main">
            <h1>Update Team</h1>
            <form action="update1.php" method="post" enctype="multipart/form-data">
            
                <label for="name"> Name :</label>
                <input type="text" name="name" value="<?php echo $data['name']; ?>" placeholder="Enter Team Name"> <br><br>
            
                <label for="position"> Position :</label>
                <input type="text" name="position" value="<?php echo $data['position']; ?>" placeholder="Enter Team Position"> <br><br>

                <label for="description">Description :</label>
                <input type="text" name="description" value="<?php echo $data['description']; ?>" placeholder="Enter Team Description"> <br><br>

                <label for="">Mobile :</label>
                <input type="mobile" name="mobile" value="<?php echo $data['mobile']; ?>" placeholder="Enter Team MObile Number"> <br><br>

                <label for="">Email :</label>
                <input type="text" name="email" value="<?php echo $data['email']; ?>" placeholder="Enter Team E-mail"> <br><br>

                <label for="image">Image :</label>
                <input type="file" name="image" value="<?php echo $data['image'] ?>">
                <img src="<?php echo $data['image'] ?>" alt="" height="200" width="250"><br><br>

                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">

                    <button type="submit" name="update_team" class="btn btn-danger">Update</button>
            </form>
        </div>
    </section>

</body>

</html>