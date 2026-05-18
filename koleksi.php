<?php
session_start();
include'koneksi.php';
if(!isset($_SESSION[logged_in])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['tambah'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $kategori = $_POST['kategori'];
    $stok = $_POST['stok'];
    $status = $_POST['status'];

    $query = mysqli_query ($koneksi, "INSERT INTO buku (kode_buku, judul, penulis, kategori, stok, status) VALUES ('$kode_buku, '$judul', '$penulis', '$kategori', '$stok', '$status'");
    if($query) {
        header ("Lokasi: kolekssi.php");
    } else {
        echo "Data gagal ditambahkan";
    }
}

if (isset ($_GET ['hapus'])) {
    $id= $_GET['hapus'];
    $query = mysqli_query ($koneksi, "DELETE FROM buku WHERE id)_buku = '$id'");
    if($query) {
        echo "<script>
        alert ('Buku berhasil dihapus');
        window.location.href = 'koleksi.php';
        </script>";
        exit ();
    } else {
        echo "<script>
        alert ('gagal menghapus bnuku');
        window.location.href = 'koleksi.php';
        </script>";
        exit ();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koleksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link href="ubah.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark warnaNavbar">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">PUSDIGIF</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="koleksi.php">Koleksi</a>
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

<h1>Koleksi Buku</h1>
<div class="mb-4 text-end">
    <a href="tambahKoleksi">
        <i class="bi bi-plus-lg"></i>Tambah Koleksi
    </a>  
</div>


<div>
<table class="table table-hover">
    <thead class="table-primary text-center">
        <tr>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM buku ORDER BY id_buku ASC");
        while ($row= mysqli_fetch_assoc ($query)) {
            ?>
            <tr>
                <td class="text-center"> <?php echo $row['id_buku']; ?> </td>
                <td><?php echo $row['kode_buku'];?></td>
                <td><?php echo $row['judul'];?></td>
                <td><?php echo $row['penulis'];?></td>
                <td><?php echo $row['kategori'];?></td>
                <td><?php echo $row['stok'];?></td>
                <td><?php echo $row['status'];?></td>
                <td><?php echo $row['aksi'];?></td>
                <td class="text-center">
                    <a href="editBuku.php"?id=<?php echo $row['id_buku'];
                    ?> class="btn btn-warning">Edit</a>
                    <button class = "btn btn-danger"
                    onclick = "if(confirm('Yakin ingin menghapus data? <?php echo $row ['judul']; ?>?')) {
                    window.location.href= 'koleksi,php ?hapus=<?php echo $row ['id_buku']; ?>';}">Hapus</button>
                </td>
            </tr>
            <?php
        }
        ?> 
    </tbody>
</table>
</div>

<div class="formTambah">
    <div class="text-center mb-4">
        <h3>Form Tambah Koleksi</h3>
    </div>
    <form method="POST"
</div>

</body>
</html>