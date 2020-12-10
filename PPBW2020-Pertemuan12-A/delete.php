<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    mysqli_query($koneksidb,"DELETE FROM data_mahasiswa WHERE id='$id'");
    echo "<script>alert('Data Berhasil Dihapus!');location='index.php';</script>";
?>