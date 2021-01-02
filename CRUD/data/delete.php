<?php 
include '../konek.php';

$nik = $_POST['nik'];
$sql = "DELETE FROM desa where nik=$nik";

if ($conn->query($sql) === TRUE) {
  header("Location: http://localhost/CRUD/indeks.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>