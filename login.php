<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <section class="login">
        <h1 class="log">PUSDIGIF</h1>
        <p>Sistem Perpustakaan Informatika</p>
        <?php if(isset ($_SESSION ['login_eror'])):?>
            <div class="alert alert-danger">
                <?= $_SESSION['login_eror'];?>
            </div>
                <?php unset ($_SESSION['login_eror']);endif;?>
                <form method="post" action="otwLogin.php">
                    <div class= "mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type=""text" class="form-control" id="username" name="username"></input>
                    </div>
                    <div class= "mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"></input>
                    </div>
                    <button type="submit" class="btn btn-primary submit">Masuk</button>
                </form>
    </section>
</body>
</html>