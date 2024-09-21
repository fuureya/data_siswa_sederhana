<?php
require_once __DIR__ . "/db.php";

if (isset($_POST["submit"])) {
    $nama_lengkap =  $_POST['nama_lengkap'];
    $tanggal_lahir =  $_POST['tanggal_lahir'];
    $tempat_lahir =  $_POST['tempat_lahir'];
    $nis =  $_POST['nis'];
    $nisn =  $_POST['nisn'];

    $query = "INSERT INTO siswa (nama_lengkap, tanggal_lahir, tempat_lahir, nis, nisn) 
              VALUES ('$nama_lengkap', '$tanggal_lahir', '$tempat_lahir', '$nis', '$nisn')";

    if (mysqli_query($connection, $query)) {
        return header('Location: ../index.php');
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
