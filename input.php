<?php
include 'koneksi.php';
$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pinjam = $_POST['tglpinjam'];
$batas = $_POST['tglbatas'];

$sql=mysqli_query($conn,"INSERT INTO data VALUES ('$kode','$judul','$pengarang','$tahun','$nama','$alamat','$pinjam','$batas')");

if ($sql) {
	header("Location: select.php?pesan=input");
}else{
header("Location: depan.php");
}
mysqli_close($conn);
?>