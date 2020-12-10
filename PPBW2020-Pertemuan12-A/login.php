<?php
	session_start();
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css">
		<title>Login</title>
	</head>
	<body>
		<div class="container">
			<form method="POST" class="row-g-3">
				<h2>USER LOGIN</h2>
				<div class="col-md-4">
					<input type="text" class="input" id="validationDefault01" placeholder="Username" name="username" required>
				</div>
				<div class="col-md-4">
					<input type="password" class="input" id="validationDefault02" placeholder="Password" name="password" required>
				</div>
				<div class="col-12">
					<button class="btn-login" type="submit" name="login">LOGIN</button>
				</div>
			</form>
		</div>
		<?php
			
			if(isset($_POST['login']))
			{
				$user=$_POST['username'];
				$pass=$_POST['password'];
				$user_data = mysqli_query($koneksidb,"SELECT * FROM user WHERE Username='$user' AND Password='$pass'");
				$results = mysqli_fetch_array($user_data);
				$username = $results['Username'];
				$password = $results['Password'];
				$level = $results['Jabatan'];
				if($user == $username && $pass == $password){
					$_SESSION['Jabatan']= $level;
					header('location:index.php');
				} else{
					echo "<script>alert('Username atau Password Belum Benar!');</script>";
				}
			}
		?>
	</body>
</html>