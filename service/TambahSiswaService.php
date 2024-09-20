<?php
require_once __DIR__ . "/db.php"; // Ganti dengan path yang sesuai

if (isset($_POST["submit"])) {
    $nama_lengkap =  $_POST['nama_lengkap'];
    $tanggal_lahir =  $_POST['tanggal_lahir'];
    $tempat_lahir =  $_POST['tempat_lahir'];
    $nis =  $_POST['nis'];
    $nisn =  $_POST['nisn'];
}

// Menutup koneksi
mysqli_close($connection);
