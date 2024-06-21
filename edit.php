<?php 
include 'logic/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi,"select * from biodata where id='$id'");
$row = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/blob.css">
</head>
<body>
  <div class="blob blob1"></div>
  <div class="blob blob2"></div>
  <div class="blob blob3"></div>

  <div class="container">
    <h1>Form Biodata</h1>
    <form action="logic/perbarui.php" method="POST">
      <input type="hidden" name="id" value="<?= $row['id'] ?>">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?= $row['nama'] ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?= $row['email'] ?>" required>
      </div>
      <div class="form-group">
        <label for="gender">Jenis Kelamin:</label>
        <select name="gender" id="gender" required>
          <option value="">-- Pilih --</option>
          <option value="Laki-laki" <?= $row['gender'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
          <option value="Perempuan" <?= $row['gender'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?= $row['alamat'] ?>" required>
      </div>
      <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="<?= $row['tanggal_lahir'] ?>" required>
      </div>
      <button>Simpan</button>
    </form>
</body>
</html>