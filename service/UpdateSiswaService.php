<?php
require_once __DIR__ . "/db.php";

if (isset($_POST["submit"])) {
    // Ambil data dari form
    $id = $_POST['id']; // ID siswa yang akan diperbarui
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $nis = $_POST['nis'];
    $nisn = $_POST['nisn'];

    // Query untuk memperbarui data
    $query = "UPDATE siswa SET
                nama_lengkap = '$nama_lengkap',
                tanggal_lahir = '$tanggal_lahir',
                tempat_lahir = '$tempat_lahir',
                nis = '$nis',
                nisn = '$nisn'
                WHERE id = '$id'";

    if (mysqli_query($connection, $query)) {
        header('Location: ../index.php'); // Redirect setelah berhasil
        exit;
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
