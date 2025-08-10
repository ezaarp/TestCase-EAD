<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <div class="row">
        <center>
            <div class="col-md-6 p-3">
                <div class="row">
                    <h1>Selamat datang di Aplikasi Lost And Found!</h1>
                </div>
                <div class="row">
                    <!-- Tampilkan Foto untuk halaman utamanya -->
                    <div class="col-md-12 p-3">
                        <img width="75%" src="hero.png"></img>
                    </div>
                    <div class="col-md-6 p-3">
                        <a class="btn btn-outline-primary" href="form_create_barang.php">Tambah Data Barang</a>
                    </div>
                    <div class="col-md-6 p-3">
                        <a class="btn btn-outline-secondary" href="list_barang.php">Lihat Data Barang</a>
                    </div>
                </div>
            </div>
        </center>
    </div>
</body>
</html>
