<?php 
	include '../konek.php';

	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];

	$sql = "INSERT INTO desa (nik, nama, jenis_kelamin, alamat)
			VALUES ('$nik', '$nama', '$jenis_kelamin', '$alamat');
			";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/CRUD/indeks.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>