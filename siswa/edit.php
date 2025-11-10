<?php
include '../config/database.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
$row = mysqli_fetch_assoc($data);

$kelas = mysqli_query($conn, "SELECT * FROM kelas");
?>
<!DOCTYPE html>
<html>
<head><title>Edit Siswa</title></head>
<body>
<h2>Edit Data Siswa</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    NIS: <input type="text" name="nis" value="<?= $row['nis']; ?>" required><br><br>
    Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>

    Kelas:
    <select name="id_kelas" required>
        <option value="">-- Pilih Kelas --</option>
        <?php while ($k = mysqli_fetch_assoc($kelas)) : ?>
            <option value="<?= $k['id']; ?>" <?= $row['id_kelas'] == $k['id'] ? 'selected' : ''; ?>>
                <?= $k['nama_kelas'] . ' ' . $k['jurusan'] . ' ' . $k['kode']; ?>
            </option>
        <?php endwhile; ?>
    </select><br><br>

    <button type="submit">Update</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
