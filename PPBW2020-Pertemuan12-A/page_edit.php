<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <title>EDIT DATA</title>

        <style>
        .jumbotron {
            width: 45%;
            height: 380px;
            margin: 50px auto;
        }
        .btn a{
            color: white;
        }
        
        h2 {
            padding-top: 40px;
            text-align: center;
        }

        table {
            margin: 50px auto;
        }

        .btn {
            margin-top: 25px;
        }

        .btn-success {
            margin-top: -100px;
            margin-left: 460px;
        }

        .btn-secondary {
            margin-top: -53px;
            margin-left: 370px;
        }

        label {
            margin-right: 25px;
        }

        input {
            width: 450px;
            margin-bottom: 10px;
        }
        </style>
    </head>
    <body>
    <h2>Edit Data Mahasiswa</h2>
    <div class="jumbotron">
        <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksidb,"SELECT * FROM data_mahasiswa WHERE id='$id'");
            while ($d = mysqli_fetch_array($data)){
        ?>
        <form method="POST" action="update.php">
            <table>
                <tr>
                    <td>
                    <label>NIM</label>
                    </td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nim" value="<?php echo $d['NIM']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label>Nama</label>
                    </td>
                    <td><input type="text" name="nama" value="<?php echo $d['Nama_mhs']; ?>"></td>
                </tr>
                <tr>
                    <td>
                    <label>Alamat</label>
                    </td>
                    <td><input type="text" name="alamat" value="<?php echo $d['Alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>
                    <label>IPK</label>
                    </td>
                    <td><input type="text" name="ipk" value="<?php echo $d['IPK']; ?>"></td>
                </tr>
            </table>
            <button type="submit" class="btn btn-secondary">
            <a href="index.php">Kembali</a>
            </button>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
        <?php } ?>  
    </div>
        
    </body>
</html>