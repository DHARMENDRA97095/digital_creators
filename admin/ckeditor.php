<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/47.4.0/ckeditor5.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

    <style>
        .box {
            /* width: 100%;
            max-width: 600px; */
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 16px;
            margin: 0 auto;
        }

        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 100px;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include "config.php";

    if (isset($_POST['submit'])) {

        $content = $_POST['content'];

        $query = "INSERT INTO tbl_ckeditor (content) VALUES ('$content')";
        $insert = mysqli_query($conn, $query);

        if ($insert) {
            $msg = "Data Inserted";
        } else {
            $msg = "Error: " . mysqli_error($conn);
        }
    }
    ?>


    <html>

    <head>
        <title>Ckeditor</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    </head>

    <body>
        <div class="container">
            <!-- <h3 align="center">CKEditor</h3> -->
            <br>
            <div class="box">
                <form method="post">
                    <div class="form-group">
                        <textarea id="content" name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary">
                    </div>
                </form>
                <div class="error"><?php if (!empty($msg)) {
                                        echo $msg;
                                    } ?></div>
            </div>
        </div>
    </body>

    </html>

    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>