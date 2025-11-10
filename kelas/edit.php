<?php
include '../config/database.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM kelas WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html>
<head><title>Edit Kelas</title></head>
<body>
<h2>Edit Data Kelas</h2>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    
    <label>Nama Kelas:</label><br>
    <input type="text" name="nama_kelas" value="<?= $row['nama_kelas']; ?>" required><br><br>
    
    <label>Jurusan:</label><br>
    <input type="text" name="jurusan" value="<?= $row['jurusan']; ?>" required><br><br>
    
    <label>Kode:</label><br>
    <input type="text" name="kode" value="<?= $row['kode']; ?>" required><br><br>
    
    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
