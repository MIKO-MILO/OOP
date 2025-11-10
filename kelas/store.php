<?php
include '../config/database.php';

$nama_kelas = $_POST['nama_kelas'];
$jurusan    = $_POST['jurusan'];
$kode       = $_POST['kode'];

mysqli_query($conn, "INSERT INTO kelas (nama_kelas, jurusan, kode) VALUES ('$nama_kelas', '$jurusan', '$kode')");
header("Location: index.php");
?>
