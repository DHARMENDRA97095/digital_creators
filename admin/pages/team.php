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
    <title>Admin Page</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: #fff;">

    <section>
        <div class="admin-main">
            <h1>Team Member Add</h1>
            <form action="insert.php" method="post" enctype="multipart/form-data">

                <label for="name">Name : </label>
                <input type="text" name="name" placeholder="Enter Team Name"> <br><br>

                <label for="para">Position : </label>
                <input type="text" name="position" placeholder="Enter Team Position"> <br><br>

                <label for="para">Description : </label>
                <input type="text" name="description" placeholder="Enter Team description"> <br><br>

                <label for="para">Mobile Number : </label>
                <input type="mobile" name="mobile" placeholder="Enter Team Mobile"> <br><br>

                <label for="para">Email : </label>
                <input type="email" name="email" placeholder="Enter Team email"> <br><br>

                <label for="image">Image :</label>
                <input type="file" name="image"> <br><br>

                <button type="submit" name="upload_team" class="btn btn-success">Upload</button>
            </form>
        </div>
    </section>

    <!-- ----------Fetch Data ------------------- -->

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Position</th>
                <th scope="col">Description</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>

                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'config.php';

            $pic = mysqli_query($conn, "SELECT * FROM `team`");

            while ($row = mysqli_fetch_assoc($pic)) {
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['position']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['mobile']}</td>
                    <td>{$row['email']}</td>
                    <td><img src='{$row['image']}' height='100' width='100'></td>

                    <td><a href='team_delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    <td><a href='./update_team.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>
                </tr>
                ";
            }
            ?>

        </tbody>
    </table>
</body>

</html>