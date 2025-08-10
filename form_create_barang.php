<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Ikan</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>Tambah Barang</h1>
            <div class="col-md-4 p-3">
                <div class="card">
                    <div class="card-body">
                        <form action="create.php" method="POST" enctype="multipart/form-data" name="form_create">
                            <!-- Lengkapi form dengan inputan yang dibutuhkan -->
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" id="nama_barang" name="nama_barang" required>
                                <label for="nama_barang">Nama Barang</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" id="jenis_barang" name="jenis_barang" required>
                                <label for="jenis_barang">Jenis Barang</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" id="lokasi_barang" name="lokasi_barang" required>
                                <label for="lokasi_barang">Lokasi Terakhir/TKP</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="string" class="form-control" id="kontak" name="kontak" required>
                                <label for="kontak">Kontak Pemilik/Penemuan</label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-3 mt-3 w-100">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <center>
</body>
</html>
