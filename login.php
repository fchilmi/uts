<?php
ob_start();
session_start();
include 'koneksi.php';

/* proses login */
if (isset($_POST["submit_login"])) {
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($conn,"SELECT username,password FROM login WHERE username = '$username' && password = '$password'")or die(mysql_error());
if(mysqli_num_rows($login)>0){
  header("location:depan.php");
}else{
  header("location:kosong.php")or die(mysql_error());
  exit();
}
}
mysqli_close($conn);
ob_end_flush();
?>
