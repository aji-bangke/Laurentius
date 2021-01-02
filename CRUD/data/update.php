<?php
	include '../konek.php';

	$nikAwal = $_POST['nikAwal'];
	$nik = $_POST['nik'];
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];


	  $sql = "UPDATE desa SET nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE nik='$nikAwal'";
    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/crud/indeks.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }



?>