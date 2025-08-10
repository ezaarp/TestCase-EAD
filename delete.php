<?php
include('connect.php');
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del_query = "DELETE FROM barang WHERE id = $id";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        mysqli_query($conn, "ALTER TABLE barang AUTO_INCREMENT = 1");
        header("Location: list_barang.php");
        exit;
    } else {
        echo "
        <script>
            alert('Gagal menghapus data');
            window.location.href = 'list_barang.php';
        </script>
        ";
        exit;
    }
}

mysqli_close($conn);
?>