<?php
include_once("db.php");
session_start();

if(isset($_SESSION["username"])) {
    $query = "SELECT * from film";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();
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
    <title>Praktikum PWEB</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <!-- Kalo belum login -->
        <?php
        if(!isset($_SESSION["username"])) {
            ?>
    <form action="login.php" method="POST" id="form">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        <!-- Kalo udah login -->
        <?php
        } else {
            $counter = 0;
            rsort($result);
            ?>
            <a href="form_insert.php"><button type="button" class="btn btn-primary">Tambah Data</button></a>
            <a href="logout.php"><button type="button" class="btn btn-primary">Logout</button></a>
            <?php
            foreach ($result as $key => $value) {
        ?>
        <div class="card" style="width: 18rem;">
            <div class="card-header text-muted">
            <?=$value["release_year"]?>
            </div>
            <img src="<?php echo $value["img"] ?? 'https://images.unsplash.com/photo-1508921912186-1d1a45ebb3c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8cGhvdG98ZW58MHx8MHx8&w=1000&q=80';?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$value["title"]?></h5>
                <p class="card-text"><?=$value["description"]?></p>
                <a href="detail_film.php" class="btn btn-primary">Detail film</a>
            </div>
        </div>
        <?php
            $counter++;
            if($counter == 20)
                break;
            }
        }
        ?>
        </div>
    </div>
    <script>
        // $("#form").on('submit', function(e) {
        //     e.preventDefault();
            
        //     let form = $(this);
        //     let action = form.attr('action');
        //     console.log(form);

        //     $.ajax({
        //         type: "POST",
        //         url: action,
        //         data: form.serialize(),
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