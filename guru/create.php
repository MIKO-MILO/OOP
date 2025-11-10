<?php
include '../config/database.php';
$kelas = mysqli_query($conn, "SELECT * FROM kelas");
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Guru</title></head>
<body>
<h2>Tambah Data Guru</h2>
<form action="store.php" method="POST">
    Nama: <input type="text" name="nama" required><br><br>
    Mata Pelajaran: <input type="text" name="mata_pelajaran" required><br><br>
    Kelas:
    <select name="id_kelas" required>
        <option value="">-- Pilih Kelas --</option>
        <?php while ($k = mysqli_fetch_assoc($kelas)) : ?>
            <option value="<?= $k['id']; ?>">
                <?= $k['nama_kelas'] . ' ' . $k['jurusan'] . ' ' . $k['kode']; ?>
            </option>
        <?php endwhile; ?>
    </select>

    <button type="submit">Simpan</button>
</form>
<a href="index.php">Kembali</a>
</body>
</html>
