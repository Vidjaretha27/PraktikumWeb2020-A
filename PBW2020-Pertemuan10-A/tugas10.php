<?php
    // simbol $ berguna untuk identifikasi variabel dalam php
    // $_POST disini berguna untuk mengidentifikasi form yg bermethod
    // line 5-11 berfungsi untuk memberikan deskripsi variabel yang digunakan dalam php dengan metode post
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $rataNilai = NULL;
    $jumlahNilai = NULL;

    //kondisi dalam if berfungsi apabila tombol submit di klik, lalu melakukan perhitungan untuk jumlah dan rata2 nilai yg diinputkan user
    if(isset($_POST["submit"])){
        if ($nilai1!=NULL && $nilai2!=NULL){
            $rataNilai = ($_POST["nilai1"] + $_POST["nilai2"]) / 2;
            $jumlahNilai = $_POST["nilai1"] + $_POST["nilai2"];
        }
    } else{
        $rataNilai = NULL;
        $jumlahNilai = NULL;
    }
                
                
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- dibawah ini merupakan perintah untuk menyambungkan file php dan css dalam hal desain -->
        <link rel="stylesheet" href="style.css">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <h1 align="center">TUGAS PERTEMUAN 10</h2>
        <p align="center">Gusti Ayu Vidjaretha Wardana</p>
        <p align="center">1808561004</p>
        <p align="center">Kelas A</p>
        <hr />
        <!-- form disini menggunakan metode post yang dimana nilai yang diinputkan user juga dapat dilihat publik -->
        <form name="DataMahasiswa" method="POST" action="">
            <!-- seperti biasa dalam table-input, user melakukan input data dengan type text, option dan juga number untuk nilai-->
            <table class="tabel-input" align="center" >
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" class="nama" id="input"></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" class="nim" id="input"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="jk" id="input">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                            <option value="Campuran">Campuran</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nilai 1</td>
                    <td><input type="number" name="nilai1" class="nilai1" id="input"></td>
                </tr>
                <tr>
                    <td>Nilai 2</td>
                    <td><input type="number" name="nilai2" class="nilai2" id="input"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="SUBMIT" class="submit" name="submit" id="tombol-submit" ></td>
                </tr>
            </table>
            <p align="center">Data Lengkap</p>
            <!-- pada table-output, user dapat melihat data yang sebelumnya diinputkan + nilai jumlah dan nilai rata2 dari kedua nilai yg diinputkan -->
            <table class="tabel-output" align="center">
                <tr>
                    <td>Nama</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel nama -->
                        <?php
                            echo $nama;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel nim -->
                        <?php
                            echo $nim;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel jk (jenis kelamin) -->
                        <?php
                            echo $jk;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nilai 1</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel nilai1 -->
                        <?php
                            echo $nilai1;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Nilai 2</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel nilai2 -->
                        <?php
                            echo $nilai2;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Nilai </td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel jumlahNilai yang sebelumnya sudah dihitung dalam php -->
                        <?php
                            echo $jumlahNilai;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Rata-rata Nilai</td>
                    <td>
                        <!-- disini ada syntax php untuk menampilkan isi dari variabel rataNilai yang sebelumnya sudah dihitung dalam php -->
                        <?php
                            echo $rataNilai;
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>