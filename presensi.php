<?php
include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM presensi ORDER BY id DESC");

if(isset($_POST['Submit'])){
	$nama = $_POST['nama'];
	$prodi = $_POST['prodi'];
	$nim = $_POST['nim'];
	$mata_kuliah = $_POST['mata_kuliah'];

	$add = mysqli_query($mysqli, "INSERT INTO presensi (nama, prodi, nim, mata_kuliah, waktu_kehadiran) VALUES ('$nama','$prodi', '$nim', '$mata_kuliah', NOW())");
}
?>

<!<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles.css">
  <title>Presensi Mahasiswa</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<span class="navbar-title">Presensi Mahasiswa</span>
		</div>
	</nav>
	<div class="bg-success p-2 text-dark bg-opacity-10">
		<h1 class="p-4 text-center">DAFTAR HADIR MAHASISWA</h1>
		<div class="container">
			<form action="" method="post" name="form_absen" class="animate__animated animate__fadeInUp">
				<div class="col-md-6 offset-md-3">
					<div class="mb-3">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control light-animation" name="nama" placeholder="Masukkan Nama">
					</div>
					<div class="mb-3">
  						<label class="form-label">NIM</label>
 						<input type="number" class="form-control light-animation" name="nim" placeholder="Masukkan NIM" min="0" max="9999999999">
					</div>

					<div class="mb-3">
						<label class="form-label">Prodi</label>
						<input type="text" class="form-control light-animation" name="prodi" placeholder="Masukkan Prodi">
					</div>
					<div class="mb-3">
						<label class="form-label">Mata Kuliah</label>
						<input type="text" class="form-control light-animation" name="mata_kuliah" placeholder="Masukkan Mata Kuliah">
					</div>
				</div>
				<div class="text-center">
					<button type="reset" class="btn btn-danger light-animation" name="reset">Reset</button>
					<button type="submit" class="btn btn-primary light-animation" name="Submit">Hadir</button>
					<a href="dashboard.php" class="btn btn-primary">Kembali ke Dashboard</a>
				</div>
			</form>
			<table class="my-5 table">
				<thead>
					<tr>
						<th>Nama</th>
						<th>NIM</th>
						<th>Prodi</th>
						<th>Mata Kuliah</th>
						<th>Waktu Kehadiran</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($r = mysqli_fetch_array($result)){
					?>
						<tr>
							<td><?php echo $r['nama']; ?></td>
							<td><?php echo $r['nim']; ?></td>
							<td><?php echo $r['prodi']; ?></td>
							<td><?php echo $r['mata_kuliah']; ?></td>
							<td><?php echo $r['waktu_kehadiran']; ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
