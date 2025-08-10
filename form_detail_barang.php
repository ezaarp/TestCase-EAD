<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Ikan</title>
    </head>
    <body>
        <?php 
            include("navbar.php");
            include("connect.php");
            $id = $_GET['id'];
            // Buatlah query untuk mengambil masing-masing data berdasarkan id dari database (gunakan fungsi GET dan mysqli_fetch_assoc() 
            // serta query SELECT dan WHERE)
            $query = "SELECT * FROM barang WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            
        ?>
        <div class="row">
            <center>
                <h1>Detail Barang</h1>
                <div class="col-md-4 p-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <!-- Tampilkan masing-masing data yang telah diambil dari database tadi (CLUE: gunakan value)-->
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" id="nama_barang" name="nama_barang" value="<?= $row['nama_barang'] ?>" disabled>
                                    <label for="nama_barang">Nama Barang</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" id="jenis_barang" name="jenis_barang" value="<?= $row['jenis_barang'] ?>" disabled>
                                    <label for="jenis_barang">Jenis Barang</label>
                                </div>        
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" id="lokasi_barang" name="lokasi_barang" value="<?= $row['lokasi_barang'] ?>" disabled>
                                    <label for="lokasi_barang">Lokasi Terakhir/TKP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="string" class="form-control" id="kontak" name="kontak" value="<?= $row['kontak'] ?>" disabled>
                                    <label for="kontak">Kontak Pemilik/Penemuan</label>
                                </div>
                                <a class="btn btn-warning mb-3 mt-3 w-100" href="form_update_barang.php?id=<?= $id; ?>">Edit</a>
                                <a class="btn btn-danger mb-3 mt-3 w-100" href="delete.php?id=<?= $id; ?>" onclick="return confirm('Yakin hapus data ini?')">Delete</a>
                            </form>
                        </div>
                    </div>
                </div>
            <center>
        </div>
    </body>
</html>