<?php

$username = "root";
$password = "";
$server = "localhost";
$database = "daftar_siswa";

// membuat koneksi
$connection = mysqli_connect($server, $username, $password, $database);

// mengecek jika ada kesalahan pada service database
if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
