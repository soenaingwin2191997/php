<?php

use Helpers\Auth;
use Libs\Database\MySql;
use Libs\Database\UserTable;

include ("./vendor/autoload.php");

$table=new UserTable(new MySql());
$users=$table->userGetAll();

$check=Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <nav style="z-index: 90;" class=" navbar navbar-expand bg-dark text-white position-sticky top-0 px-5">
                <div class=" nav-link">Hello</div>
                <div class="flex-fill"></div>
                <a href="_actions/logout.php" class="btn btn-sm btn-danger me-2">Logout</a>
                <a href="profile.php" class="btn btn-sm btn-danger">Profile</a>
            </nav>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Role</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user->id ?></td>
                                <td><?= $user->name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->phone ?></td>
                                <td>
                                    <?php if($user->role_id==1): ?>
                                        <span class=" badge bg-success"><?= $user->role ?></span>
                                    <?php elseif($user->role_id==2): ?>
                                        <span class=" badge bg-info"><?= $user->role ?></span>
                                    <?php elseif($user->role_id==3): ?>
                                        <span class=" badge bg-primary"><?= $user->role ?></span>
                                    <?php else: ?>
                                        <span class=" badge bg-danger"><?= $user->role ?></span>
                                    <?php endif ?>
                                </td>
                                <td>
                                    <?php if($check->role_id>=4): ?>
                                    <div class=" btn-group">
                                        <div class="drop-down">
                                            <button class="btn btn-sm btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">Change Role</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=1">User</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=3">Developer</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=2">Manager</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=4">Admin</a></li>
                                            </ul>
                                        </div>
                                        <?php if($user->suspended): ?>
                                            <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-primary">UnBan</a>
                                        <?php else: ?>
                                            <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-primary">Ban</a>
                                        <?php endif ?>
                                        <a href="_actions/delete.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                                    </div>
                                    <?php elseif($check->role_id>=2): ?>
                                    <div class=" btn-group">
                                        <div class="drop-down">
                                            <button class="btn btn-sm btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">Change Role</button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=1">User</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=3">Developer</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=2">Manager</a></li>
                                                <li><a class="dropdown-item" href="_actions/role.php?id=<?= $user->id ?>&role=4">Admin</a></li>
                                            </ul>
                                        </div>
                                        <?php if($user->suspended): ?>
                                            <a href="_actions/unsuspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-primary">UnBan</a>
                                        <?php else: ?>
                                            <a href="_actions/suspend.php?id=<?= $user->id ?>" class="btn btn-sm btn-outline-primary">Ban</a>
                                        <?php endif ?>
                                    </div>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>