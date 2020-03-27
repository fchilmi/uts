<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="selec.css">
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
	<h1>DATA PEMINJAMAN</h1>
<table>
	<tr>
		<th>NO.</th>
		<th>Kode Buku</th>
		<th>Judul Buku</th>
		<th>Nama Pengarang</th>
		<th>Tahun Terbit</th>
		<th>Nama Peminjam</th>
		<th>Alamat</th>
		<th>Tanggal Pinjam</th>
		<th>Batas Pinjam</th>
		<th>Opsi</th>
	</tr>
<?php 
		include "koneksi.php";
		$sql = mysqli_query($conn,"SELECT * FROM data") or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($sql)){
		echo "
		<tr>
			<td>$nomor</td>
			<td>". $data['kd_buku']."</td>
			<td>". $data['jdl_buku']."</td>
			<td>". $data['pengarang']."</td>
			<td>". $data['thn_terbit']."</td>
			<td>". $data['nm_peminjam']."</td>
			<td>". $data['alamat']."</td>
			<td>". $data['tgl_pinjam']."</td>
			<td>". $data['bts_pinjam']."</td>
			<td>
				<a href='update.php?kd_buku=$data[kd_buku]'>Edit</a>
			</td>
		</tr>";
		$nomor++;
		 } ?>
</table></section>
<button><a href="depan.php">KEMBALI</a></button>
</body>
</html>