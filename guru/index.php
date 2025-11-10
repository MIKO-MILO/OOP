<?php
include '../config/database.php';
$query = "SELECT guru.*, kelas.nama_kelas, kelas.jurusan, kelas.kode 
          FROM guru 
          LEFT JOIN kelas ON guru.id_kelas = kelas.id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head><title>Data Guru</title></head>
<body>
    <?php include '../layout/navbar.php'; ?>
<h2>Data Guru</h2>
<a href="create.php">+ Tambah Guru</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Mata Pelajaran</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['mata_pelajaran']; ?></td>
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
