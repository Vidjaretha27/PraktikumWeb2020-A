<?php
    session_start();
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BERANDA</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <br>    
        <h1 align="center">SELAMAT DATANG</h1>
        <div class="container01">
            <a href="page_tambah.php">Tambah Data Mahasiswa</a>
            <form method="POST">
                <table class="tabledata">
                    <thead>
                        <tr>
                            <th >No.</th>
                            <th >NIM</th>
                            <th >Nama</th>
                            <th >Alamat</th>
                            <th >IPK</th>
                            <th >OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                			$no = 0;
							$sql = "SELECT * FROM data_mahasiswa";
							$query = mysqli_query($koneksidb,$sql);
                            while ($result = mysqli_fetch_array($query))
                            {
								$no++;
								?>
								<tr>
									<td><?php echo ($no);?></td>
									<td><?php echo ($result['NIM']);?></td>
									<td><?php echo ($result['Nama_mhs']);?></td>
									<td><?php echo ($result['Alamat']);?></td>
									<td><?php echo ($result['IPK']);?></td>
                                    <td class="text-center">
                                        <a type="button" class="btn-warning" href="page_edit.php?id=<?php echo ($result['id']);?>">Edit</a>
											<?php if ($_SESSION ['Jabatan'] == "Admin") { ?>
									    <a type="button" class="btn-danger" href="delete.php?id=<?php echo ($result['id']);?>" onclick="return confirm('Apakah anda akan menghapus <?php echo $result['id'];?>?');">Hapus</a>
											<?php } ?>
									</td>
								</tr>
						<?php } ?>
                    </tbody>
                </table>
                <tr>
                    <button class="btn-logout" type="submit" name="logout"> <a href="logout.php">LOG OUT</a> </button>
                </tr>
            </form>
        </div>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</html>