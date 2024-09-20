<?php

require_once __DIR__ . "/db.php";

// Memeriksa apakah form sudah disubmit
if (isset($_POST["submit"])) {

    $username = $_POST['username'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = $_POST['password'];

    // Menghash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO users (username, nama_lengkap, password) VALUES ('$username', '$nama_lengkap', '$hashed_password')";

    if (mysqli_query($connection, $query)) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
} else {
    // menendang jika tidak menekan submit
    return header('Location: ../register.php');
}
