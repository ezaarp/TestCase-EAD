<?php
include('connect.php');
if(isset($_POST)){
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $lokasi_barang = $_POST['lokasi_barang'];
    $kontak = $_POST['kontak'];
    $query = "INSERT INTO barang (nama_barang, jenis_barang, lokasi_barang, kontak) VALUES ('$nama_barang', '$jenis_barang', '$lokasi_barang', '$kontak')";
    mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        header("Location: list_barang.php");
    } else {
        echo "
        <script>
            alert('Gagal menambahkan data');
            window.location.href = 'form_create_barang.php';
        </script>
        ";
    }
}
?>