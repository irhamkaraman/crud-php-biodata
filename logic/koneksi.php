<?php 
$server = "localhost";
$user = "root";
$pass = "";
$db = "irham_23533740";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
  echo "Koneksi Gagal";
}