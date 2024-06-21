<?php 
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,"delete from biodata where id='$id'");

if ($data) {
  header("location: ../index.php");
} else {
  echo "Gagal";
}
?>