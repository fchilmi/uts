<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript">
      alert('SELAMAT DATANG')
    </script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="depan.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
<div class="sidebar">
    <header>PERPUSTAKAAN</header>
  <ul>
    <li><a href="depan.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="tambah.php"><i class="fas fa-qrcode"></i>Tambah Data</a></li>
    <li><a href="select.php"><i class="fas fa-stream"></i>Data Peminjam</a></li>
  </ul>
</div>
<section>
  <h1>Selamat Datang</h1>
</section>
</body>
</html>

<?php
mysqli_close($conn);
?>
