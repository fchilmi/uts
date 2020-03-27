<?php 
include 'koneksi.php';
$kode = $_POST['kd_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['thn_terbit'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pinjam = $_POST['tgl_pinjam'];
$batas = $_POST['bts_pinjam'];

$sql=mysqli_query($conn,"UPDATE data SET jdl_buku='$judul',pengarang='$pengarang',thn_terbit='$tahun',nm_peminjam='$nama',alamat='$alamat',tgl_pinjam='$pinjam',bts_pinjam='$batas' WHERE kd_buku='$kode'");

header("location: select.php?pesan=update");
?>