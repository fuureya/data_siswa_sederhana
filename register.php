<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan Login Sederhana</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

    <div class="register register-container mt-5">
        <h2 class="text-center mb-3">Register</h2>
        <form method="POST" action="service/RegisterService.php">
            <div class="form-group">
                <label for="fullName">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap" name="nama_lengkap" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi" name="password" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Daftar</button>
        </form>
        <div class="text-center mt-3">
            <a href="#">Sudah punya akun? Masuk</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>