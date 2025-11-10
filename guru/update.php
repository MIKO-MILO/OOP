<?php
include '../config/database.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$mapel = $_POST['mata_pelajaran'];
$id_kelas = $_POST['id_kelas'];

mysqli_query($conn, "UPDATE guru 
                     SET nama='$nama', mata_pelajaran='$mapel', id_kelas='$id_kelas'
                     WHERE id=$id");

header("Location: index.php");
?>
