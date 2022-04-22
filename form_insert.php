<?php
include_once("db.php");
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
    <form action="insert.php" method="POST" id="form" enctype="multipart/form-data">

        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="title" class="form-control" id="title" name="title">
            <div id="title" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="description" class="form-control" id="description" name="description">
            <div id="description" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="language_id" class="form-label">language_id</label>
            <input type="language_id" class="form-control" id="language_id" name="language_id" value="1">
            <div id="language_id" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">url</label>
            <input type="url" class="form-control" id="url" name="url" value=>
            <div id="url" class="form-text"></div>
        </div>

        <div class="input-group mb-3">
            <label class="input-group-text" for="gambar">Upload</label>
            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/png, image/jpeg">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <script>
        // $("#form").on('submit', function(e) {
        //     e.preventDefault();
            
        //     let form = $(this);
        //     let data = new FormData(this);
        //     let action = form.attr('action');
        //     console.log(form);

        //     $.ajax({
        //         type: "POST",
        //         url: action,
        //         data: data,
        //         success: function(data) {
        //             console.log(data);
        //         },
        //         error: function(data) {
        //             alert("error")
        //         }
        //     })
        // })
    </script>
</body>
</html>