<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Home</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="text-center" style="background-image: url('https://wallpaperaccess.com/full/358800.jpg'); background-size: cover;">
	<h1 style="margin: 2rem;">Data Mahasiswa Universitas Hasanuddin</h1>

	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah Mahasiswa</a>
	<br>
	<br>
	<table class="table" border="1">
		<tr>
			<td>No</td>
			<td>NIM</td>
			<td>Nama</td>
			<td>Jurusan</td>
			<td>Aksi</td>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryAllMhs as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<td><?php echo $count ?></td>
			<td><?php echo $row->nim ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->jurusan ?></td>
			<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->nim ?>">Edit</a> | <a style="color:red;" href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->nim ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>