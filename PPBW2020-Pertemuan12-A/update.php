<?php
    // koneksi database
    include 'koneksi.php';
    // menangkap data yang dikirim dari form
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ipk = $_POST['ipk'];
    // update data ke database
    mysqli_query($koneksidb,"UPDATE data_mahasiswa SET NIM='$nim', Nama_mhs='$nama', Alamat='$alamat', IPK='$ipk' WHERE id='$id'");
    // mengalihkan halaman kembali ke index.php
    echo "<script>alert('Data Berhasil Diubah!');location='index.php';</script>";
?>