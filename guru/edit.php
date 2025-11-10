<?php
include '../config/database.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM guru WHERE id=$id");
$row = mysqli_fetch_assoc($data);

// ambil data kelas
$kelas = mysqli_query($conn, "SELECT * FROM kelas");
?>
<!DOCTYPE html>
<html>
<head><title>Edit Guru</title></head>
<body>
<h2>Edit Data Guru</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">

    Nama: 
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>

    Mata Pelajaran: 
    <input type="text" name="mata_pelajaran" value="<?= $row['mata_pelajaran']; ?>" required><br><br>

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
