<?php
session_start(); // Memulai session

// Menghapus semua session
$_SESSION = [];

// Menghancurkan session
session_destroy();

// Mengarahkan pengguna ke halaman login
header("Location: login.php"); // Ganti dengan path ke halaman login Anda
exit();
