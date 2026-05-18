<?php 
session_start();
include 'koneksi.php';
if (!isset ($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link href="ubah.css" rel="stylesheet">
</head>
<body class="koleksi">
    <nav class="navbar navbar-expand-lg navbar-dark warnaNavbar">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">PUSDIGIF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="koleksi.php">Koleksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="peminjaman.php">Peminjaman</a>
        </li>
      </ul>
      <div class="d-flex keluar">
        <a href=logout.php class="btn btn-light">Keluar</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="text-center">PERPUSTAKAAN DIGITAL INFORMATIKA</h1>
<p>Selamat datang kembali admin!</p> <br><br>
<p>Klik salah satu tombol di bawah untuk memulai proses manajemen.</p>

<a class="btn btn-success" href="catatPeminjaman" role="button">Catat Peminjaman</a>
<a class="btn btn-success" href="tambahKoleksi" role="button">Tambah Koleksi</a>

</body>
</html>