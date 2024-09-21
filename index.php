<?php
require_once __DIR__ . "/service/db.php";
require_once __DIR__ . "/service/session.php";

$query = "SELECT * FROM siswa";
$result = mysqli_query($connection, $query);
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

    <div class="siswa table-container p-5">
        <div class="w-100 d-flex justify-content-end">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <h2 class="text-center">Data Siswa SMA Sakura</h2>
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#addModal">Tambah Data</button>

        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>NIS</th>
                    <th>NISN</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be added here -->
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['nama_lengkap'] . '</td>';
                    echo '<td>' . $row['tanggal_lahir'] . '</td>';
                    echo '<td>' . $row['tempat_lahir'] . '</td>';
                    echo '<td>' . $row['nis'] . '</td>';
                    echo '<td>' . $row['nisn'] . '</td>';
                    echo '<td>
                <a href="update.php?id=' . $row['id'] . '" class="btn btn-success badge">Update</a>
                <a href="delete.php?id=' . $row['id'] . '" class="btn btn-danger badge">Delete</a>
              </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>


        </table>
    </div>

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addForm" method="post" action="service/TambahSiswaService.php">
                        <div class="form-group">
                            <label for="namaLengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggalLahir" name="tanggal_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" class="form-control" id="tempatLahir" name="tempat_lahir" required>
                        </div>
                        <div class="form-group">
                            <label for="nis">NIS</label>
                            <input type="text" class="form-control" id="nis" name="nis" required>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" class="form-control" id="nisn" name="nisn" required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#dataTable');
    </script>
</body>

</html>