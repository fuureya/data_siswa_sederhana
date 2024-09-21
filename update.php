<?php
require_once __DIR__ . "/service/db.php";
require_once __DIR__ . "/service/session.php";

if (isset($_GET["id"])) {
    // Ambil data berdasarkan id
    $id = $_GET['id'];
    $data = mysqli_query($connection, "SELECT * FROM siswa WHERE id = '$id' ");
    $result = mysqli_fetch_assoc($data);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Login Sederhana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <div class="update-form update-container mt-5">
        <h2 class="text-center">Update Data Siswa</h2>
        <form id="updateForm" action="service/UpdateSiswaService.php" method="post">
            <input type="hidden" name="id" value="<?= $result['id'] ?>">
            <div class="form-group">
                <label for="updateNamaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="updateNamaLengkap" name="nama_lengkap" value="<?= $result['nama_lengkap'] ?>" required>
            </div>
            <div class="form-group">
                <label for="updateTanggalLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="updateTanggalLahir" name="tanggal_lahir" value="<?= $result['tanggal_lahir'] ?>" required>
            </div>
            <div class="form-group">
                <label for="updateTempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="updateTempatLahir" name="tempat_lahir" value="<?= $result['tempat_lahir'] ?>" required>
            </div>
            <div class="form-group">
                <label for="updateNIS">NIS</label>
                <input type="text" class="form-control" id="updateNIS" name="nis" value="<?= $result['nis'] ?>" required>
            </div>
            <div class="form-group">
                <label for="updateNISN">NISN</label>
                <input type="text" class="form-control" id="updateNISN" name="nisn" value="<?= $result['nisn'] ?>" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-danger">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#dataTable');
    </script>
</body>

</html>