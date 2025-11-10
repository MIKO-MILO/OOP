<?php
include '../config/database.php';

$nama = $_POST['nama'];
$mapel = $_POST['mata_pelajaran'];
$id_kelas = $_POST['id_kelas'];

mysqli_query($conn, "INSERT INTO guru (nama, mata_pelajaran, id_kelas)
                     VALUES ('$nama', '$mapel', '$id_kelas')");

header("Location: index.php");
?>
