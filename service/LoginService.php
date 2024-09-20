<?php
require_once __DIR__ . "/db.php";

// Memulai session
session_start();

// Memeriksa apakah form sudah disubmit
if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengambil data pengguna
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        // Memverifikasi password
        if (password_verify($password, $user['password'])) {
            // Set session jika login berhasil
            $_SESSION['username'] = $user['username'];
            $_SESSION['nama_lengkap'] = $user['nama_lengkap'];

            // Arahkan ke halaman lain jika diperlukan
            header("Location: ../index.php");
        } else {
            echo "Kata sandi salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
