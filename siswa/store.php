<?php
include '../config/database.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];

mysqli_query($conn, "INSERT INTO siswa (nis, nama, id_kelas) VALUES ('$nis', '$nama', '$id_kelas')");
header("Location: index.php");
?>
