<?php 	

include 'konek.php';


// sql to create table
$sql = "CREATE TABLE mahasiswa (
NIM INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAMA VARCHAR(30) NOT NULL,
PRODI VARCHAR(30) NOT NULL,

reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
  echo "tabel mahasiswa berhasil dibuat";
} else {
  echo "Error creating database: " . $conn->error;
}

 ?>