<?php include('app/config.php');
include('app/functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Daftar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="mx-auto wrap-login100">

				<form class="mx-auto login100-form validate-form" method="POST" action="register.php" style="margin-top: -18%;">
					<span class="login100-form-title" style="margin-bottom: -10%">
						Daftar
					</span>
					<p>Silakan isi data diri anda dengan benar.</p>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap" required="required" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="NIK is required">
						<input class="input100" type="text" name="nik" placeholder="NIK" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Jenis kelmain is required">
						<select class="input100" name="jenis_kelamin" id="" required style="text-align: left;">
							<option value="">--Jenis Kelamin--</option>
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						</select>
						<span class="focus-input100"></span>
					</div>

					<div class="form-group">
						<textarea class="form-control" name="alamat" id="" placeholder="Alamat Lengkap" required></textarea>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username" required="required" autofocus>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required="required">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" value="Daftar" class="login100-form-btn tombol_login" name="register">
						<button class="login100-form-btn mt-2">
							<a href="index.php">Kembali</a>
						</button>

					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>

</html>
<?php
if (isset($_POST['register'])) {
	$nama = $_POST['nama'];
	$nik = $_POST['nik'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = 'user';
	$q = simpan("users", "nama,nik,jenis_kelamin,alamat,username,password,level", "'$nama','$nik','$jenis_kelamin','$alamat','$username','$password','$level'");
	if ($q) {
		echo '<script> alert("Pendafataran berhasil, silakan Masuk menggunakan username dan password") </script>';
	} else {
		echo '<script> alert("Data Gagal Ditambahkan") </script>';
	}
}
?>