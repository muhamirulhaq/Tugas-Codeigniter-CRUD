<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-image: url('https://wallpaperaccess.com/full/358800.jpg'); background-size: cover;">
	<div class="card" style="width: 50rem; margin: 0 auto; margin-top: 5rem;">
	<div class="card-header">
	<h3 class="text-center">Halaman Tambah Mahasiswa</h3>
	</div>
	<div class="card-body">
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table class="table">
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		<tr>
			<td colspan="3"><button class="alert alert-secondary" type="submit">Tambah Mahasiswa</button></td>
		</tr>
	</table>
	</form>
	</div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>