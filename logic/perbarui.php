<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$alamat = $_POST['alamat'];
$tanggal = date('Y-m-d', strtotime($_POST['tanggal_lahir']));

$update = "update biodata set nama='$nama', email='$email', gender='$gender', alamat='$alamat', tanggal_lahir='$tanggal' where id='$id'";

if ($koneksi->query($update) === TRUE) {
  header("location: ../index.php");
} else {
  echo "Gagal";
}
?>