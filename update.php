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
        <form id="updateForm">
            <div class="form-group">
                <label for="updateNamaLengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="updateNamaLengkap" required>
            </div>
            <div class="form-group">
                <label for="updateTanggalLahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="updateTanggalLahir" required>
            </div>
            <div class="form-group">
                <label for="updateTempatLahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="updateTempatLahir" required>
            </div>
            <div class="form-group">
                <label for="updateNIS">NIS</label>
                <input type="text" class="form-control" id="updateNIS" required>
            </div>
            <div class="form-group">
                <label for="updateNISN">NISN</label>
                <input type="text" class="form-control" id="updateNISN" required>
            </div>
            <div class="form-group">
                <label for="updateFoto">Foto URL</label>
                <input type="file" class="form-control" id="updateFoto" placeholder="Masukkan URL foto">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
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