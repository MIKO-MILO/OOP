<?php
// config/app.php

// Ganti ini sesuai folder project kamu di localhost
$base_url = "http://localhost/PeLAJARAN/PAK%20MAHMUDI/OOP";

?>
<style>
    body {
        font-family: Poppins, sans-serif;
        margin: 0;
        background-color: #f7f9fb;
    }
    .navbar {
        background-color: #ffffff;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .nav-links a {
        color: black;
        text-decoration: none;
        padding: 10px 16px;
        border-radius: 6px;
        margin-right: 5px;
    }
    .nav-links a:hover {
        background-color: #16c4a2;
    }
    .nav-links a.active {
        background-color: #1abc9c;
        color: white;
    }
    .nav-title {
        color: black;
        font-weight: bold;
        font-size: 18px;
    }
    .container {
        margin: 20px;
        background: white;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
</style>

<div class="navbar">
    <div class="nav-title">📘 Sistem Data Sekolah</div>
    <div class="nav-links">
        <a href="<?= $base_url ?>/index.php" class="<?= strpos($current, '/index.php') !== false ? 'active' : '' ?>">Home</a>
        <a href="<?= $base_url ?>/kelas/index.php" class="<?= strpos($current, '/kelas/') !== false ? 'active' : '' ?>">Kelas</a>
        <a href="<?= $base_url ?>/guru/index.php" class="<?= strpos($current, '/guru/') !== false ? 'active' : '' ?>">Guru</a>
        <a href="<?= $base_url ?>/siswa/index.php" class="<?= strpos($current, '/siswa/') !== false ? 'active' : '' ?>">Siswa</a>
    </div>
</div>
<div class="container">
