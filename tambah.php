<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<link rel="stylesheet" href="tambah.css">
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
<form action="input.php" method="POST" class="inp">
	<h1>Tambah Data</h1>
	<table>
	<tr class="put">
		<td>Kode Buku</td>
		<td><input name="kode" type="text" placeholder="Kode Buku..." required></td>
	</tr>
	<tr class="put">
		<td>Judul Buku</td>
		<td><input name="judul" type="text" placeholder="Judul Buku..." required></td>
	</tr>
	<tr class="put">
		<td>Pengarang</td>
		<td><input name="pengarang" type="text" placeholder="Nama Pengarang" required></td>
	</tr>
	<tr class="put">
		<td>Tahun Terbit</td>
		<td><input name="tahun" type="text" placeholder="Tahun Terbit" required></td>
	</tr>	
	<tr class="put">
		<td>Nama Peminjam</td>
		<td><input name="nama" type="text" placeholder="Nama Peminjam" required></td>
	</tr>
	<tr class="put">
		<td>Alamat Peminjam</td>
		<td><input name="alamat" type="text" placeholder="Alamat Peminjam" required></td>
	</tr>
	<tr class="put">
		<td>Tanggal Peminjaman</td>
		<td><input name="tglpinjam" type="date" required min="2019-12-31"></td>
	</tr>
	<tr class="put">
		<td>Batas Waktu Peminjaman</td>
		<td><input name="tglbatas" type="date" required max="2023-12-31"></td>
	</tr>
	<tr class="put">
		<td colspan="3" align="center"><input type="submit" name="submit" value="Kirim" class="spn" required>
		<input type="reset" name="reset" value="Bersih"></td>
	</tr>
	</table>
</section>
</body>
</html>
</html>