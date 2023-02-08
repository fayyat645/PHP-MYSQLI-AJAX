<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
<div class="col-md-3">
    <ul class="list-group">
        <li class="list-group-item active"><i class="fa fa-bars" aria-hidden="true"></i>MAIN MENU</li>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-siswa/dashboard.php" class="list-group-item <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: #212529;"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Siswa</a>
        <?php if ($_SESSION['level'] == 1 ) {?> 
            <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/dashboard.php" class="list-group-item" style="color: #212529;"><i class="fa fa-user" aria-hidden="true"></i>User</a>
            <?php } ?>
        <a href="http://<?php echo $_SERVER['SERVER_NAME'] ?>/PHP-MYSQLI-AJAX/modul-user/logout.php" class="list-group-item" style="color: #212529;"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
    </ul>
</div>
</body>
</html>