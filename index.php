<?php 
include 'logic/koneksi.php';

$no = 1;
$data = mysqli_query($koneksi,"select * from biodata");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Biodata</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blob.css">
</head>
<body>
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
  <div class="blob blob3"></div>

  <div class="content">
    <h1>List Biodata</h1>
    <div class="tombol-insert">
      <a class="insert" href="modul5_23533740.html">Insert Data</a>
    </div>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Gender</th>
          <th>Alamat</th>
          <th>Tanggal Lahir</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php while($d = mysqli_fetch_array($data)) { ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $d['nama']; ?></td>
          <td><?php echo $d['email']; ?></td>
          <td><?php echo $d['gender']; ?></td>
          <td><?php echo $d['alamat']; ?></td>
          <td><?php echo $d['tanggal_lahir']; ?></td>
          <td>
            <a href="edit.php?id=<?php echo $d['id']; ?> ">Edit</a> | 
            <a href="logic/hapus.php?id=<?php echo $d['id']; ?> ">Delete</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>