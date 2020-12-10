<?php 
    include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ipk = $_POST['ipk'];

    mysqli_query($koneksidb, "INSERT INTO data_mahasiswa VALUES('','$nim','$nama','$alamat','$ipk')");
    echo "<script>alert('Data Berhasil Ditambah!');location='index.php';</script>";
?>