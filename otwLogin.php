<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
if(empty($username || empty($password))) {
    $_SESSION['login_eror'] = "username salah";
    header ("Location: login.php");
    exit();
}
    $query = "SELECT * FROM login WHEN username='$username' AND password = '$password";
    $result = mysqli_query($koneksi, $query);
    if(mysqli_num_rows($result>0)) {
        $user = mysqli_fecth_assoc($result);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['logged_in'] = true;
        header ("Location: koleksiBuku.php");
        exit ();
    } else {
        $_SESSION ['login_eror'] = "Username dan password tidak boleh kososng!";
        header("Location: login.php");
        exit ();
    }
    ?>