<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Barang</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Barang</h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jenis Barang</th>
            <th scope="col">Lokasi Terakhir/TKP</th>
            <th scope="col">Kontak Pemilik/Penemuan</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include("connect.php");
            // Buatlah query untuk mengambil data dari database (CLUE: gunakan perulangan FOREACH)
            $query = "SELECT * FROM barang ORDER BY id DESC";
            $result = mysqli_query($conn, $query);
            $barangs = $result ? mysqli_fetch_all($result, MYSQLI_ASSOC) : [];
            ?>

            <?php if (count($barangs) == 0) : ?>
            <tr>
                <th colspan="6" class="text-center">TIDAK ADA DATA BARANG</th>
            </tr>
            <?php endif;?>

            <?php foreach ($barangs as $barang) : ?>
            <tr>
                <td><?= (int)$barang['id']?></td>
                <td><?= htmlspecialchars($barang['nama_barang'])?></td>
                <td><?= htmlspecialchars($barang['jenis_barang'])?></td>
                <td><?= htmlspecialchars($barang['lokasi_barang'])?></td>
                <td><?= htmlspecialchars($barang['kontak'])?></td>
                <td>
                    <a href="form_detail_barang.php?id=<?= (int)$barang['id']?>" class="btn btn-primary btn-sm">Detail</a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
        </table>
        </div>
    </center>
</body>
</html>
