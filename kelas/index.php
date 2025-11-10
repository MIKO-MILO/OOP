<?php
include '../config/database.php';
$result = mysqli_query($conn, "SELECT * FROM kelas");
?>
<!DOCTYPE html>
<html>
<head><title>Data Kelas</title></head>
<body>
    <?php include '../layout/navbar.php'; ?>
<h2>Data Kelas</h2>
<a href="create.php">+ Tambah Kelas</a>
<table border="1" cellpadding="8">
    <tr><th>ID</th><th>Nama Kelas</th><th>Jurusan</th><th>Kode</th><th>Kode Lengkap</th><th>Aksi</th></tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_kelas']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['kode']; ?></td>
        <td><?= $row['nama_kelas'] . ' ' . $row['jurusan'] . ' ' . $row['kode']; ?></td>
        <td>
            <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
