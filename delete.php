<?php
require_once __DIR__ . "/service/db.php";
require_once __DIR__ . "/service/session.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil data siswa sebelum dihapus (opsional)
    $query = "SELECT * FROM siswa WHERE id = '$id'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        // Hapus data siswa
        $deleteQuery = "DELETE FROM siswa WHERE id = '$id'";

        if (mysqli_query($connection, $deleteQuery)) {
            header('Location: index.php'); // Redirect setelah berhasil
            exit;
        } else {
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak valid.";
}
