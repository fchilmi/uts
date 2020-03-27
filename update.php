<?php
include "koneksi.php";
$kd_buku=$_GET['kd_buku'];
$sql = mysqli_query($conn,"SELECT * FROM data where kd_buku='$kd_buku'") or die(mysql_error());
while ($ambil = mysqli_fetch_array($sql)) {
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="update.css" class="inp">
</head>
<body> <input type="checkbox" id="check">
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
	<form action="cekupdate.php" method="POST" class="inp">
		<h1>UPDATE DATA</h1>
		<table>
			<tr class="put">
				<td></td>
				<td><input type="hidden" name="kd_buku" value="<?php echo $ambil['kd_buku'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Judul Buku</td>
				<td><input type="text" name="judul" value="<?php echo $ambil['jdl_buku'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Nama Pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $ambil['pengarang'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Tahun Terbit</td>
				<td><input type="text" name="thn_terbit" value="<?php echo $ambil['thn_terbit'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Nama Peminjam</td>
				<td><input type="text" name="nama" value="<?php echo $ambil['nm_peminjam'] ?>"></td>
			</tr class="put">
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $ambil['alamat'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Tanggal Pinjam</td>
				<td><input type="date" name="tgl_pinjam" value="<?php echo $ambil['tgl_pinjam'] ?>"></td>
			</tr>
			<tr class="put">
				<td>Batas Pinjam</td>
				<td><input type="date" name="bts_pinjam" value="<?php echo $ambil['bts_pinjam'] ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="spn" value="Simpan"></td>
			</tr>
			<?php
		};
			?>
		</table>
	</form>
</section>
	</body>
</html>