<?php
include '../config/database.php';
$query = "SELECT siswa.*, kelas.nama_kelas, kelas.jurusan, kelas.kode
          FROM siswa
          LEFT JOIN kelas ON siswa.id_kelas = kelas.id";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head><title>Data Siswa</title></head>
<body>
    <?php include '../layout/navbar.php'; ?>
<h2>Data Siswa</h2>
<a href="create.php">+ Tambah Siswa</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nis']; ?></td>
        <td><?= $row['nama']; ?></td>
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
