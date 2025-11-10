<?php
include '../config/database.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];

mysqli_query($conn, "UPDATE siswa SET nis='$nis', nama='$nama', id_kelas='$id_kelas' WHERE id=$id");
header("Location: index.php");
?>
