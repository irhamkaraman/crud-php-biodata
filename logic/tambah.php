<?php 
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$tanggal = date('Y-m-d', strtotime($_POST['tanggal_lahir']));

$insert = "insert into biodata (nama, email, gender, alamat, tanggal_lahir) values ('$nama', '$email', '$gender', '$alamat', '$tanggal')";

if ($koneksi->query($insert) === TRUE) {
  header("location: ../index.php");
} else {
  echo "Gagal";
}
?>