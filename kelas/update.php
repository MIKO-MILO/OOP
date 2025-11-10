<?php
include '../config/database.php';

$id = $_POST['id'];
$nama_kelas = $_POST['nama_kelas'];
$jurusan = $_POST['jurusan'];
$kode = $_POST['kode'];

mysqli_query($conn, "UPDATE kelas 
    SET nama_kelas='$nama_kelas', jurusan='$jurusan', kode='$kode' 
    WHERE id=$id");

header("Location: index.php");
exit;
?>
