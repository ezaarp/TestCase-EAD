<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');

if (isset($_POST['update'])) {
    // (2) Tangkap nilai "id" barang (CLUE: gunakan GET)
    $id = $_GET['id'];
    
    // (3) Tangkap data yang diinput dari form (CLUE: gunakan POST)
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $lokasi_barang = $_POST['lokasi_barang'];
    $kontak = $_POST['kontak'];

    // (4) Buat query untuk mengupdate data barang ke database
    $query = "UPDATE barang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', lokasi_barang = '$lokasi_barang', kontak = '$kontak' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // (5) Buat kondisi jika proses update berhasil atau tidak
    if ($result) {
        header("Location: list_barang.php");
        exit;
    } else {
        echo "
        <script>
            alert('Gagal mengupdate data');
            window.location.href = 'form_update_barang.php?id=$id';
        </script>
        ";
        exit;
    }
} else {
    header("Location: list_barang.php");
    exit;
}
?>