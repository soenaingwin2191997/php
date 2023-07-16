<?php

use Helpers\Auth;

include ("vendor/autoload.php");

$auth=Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div style="max-width: 500px;" class="col">
                <div class="d-flex align-items-center justify-content-center my-3">
                    <div style="border-radius: 50%; border:6px solid blue; width:300px; height:300px;" class="d-flex align-items-center justify-content-center overflow-hidden">
                        <img style="object-fit: cover; height:100%;" src="_actions/photos/<?= $auth->photo ?>" alt="Photo">
                    </div>
                </div>
                <form method="post" action="_actions/upload.php" enctype="multipart/form-data" class="input-group mb-3">
                    <input class="form-control" type="file" name="photo" id="">
                    <input class="btn btn-info" type="submit" value="Upload">
                </form>
                <ul class=" list-group">
                    <li class=" list-group-item">Name: <?= $auth->name ?></li>
                    <li class=" list-group-item">Email: <?= $auth->email ?></li>
                    <li class=" list-group-item">Phone: <?= $auth->phone ?></li>
                    <li class=" list-group-item">Address: <?= $auth->address ?></li>
                </ul>
                <a class="btn btn-info mt-2" href="admin.php">Admin</a>
                <a class="btn btn-info mt-2" href="_actons/logout.php">Logout</a>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>