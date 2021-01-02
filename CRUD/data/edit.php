<?php
	include '../konek.php';


    $nikAwal = $_POST['nik'];
    $sql = "SELECT nik, nama, jenis_kelamin, alamat FROM desa WHERE nik=$nikAwal";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <style type="text/css">
    html, body {
     height:100%;
}
        .footer{
    width: 100%;
    background-color: #484848;
    color: #fff;
    text-align: right;
    bottom: 0px;
    }
    #container{
          min-height: 100%;
    position: relative;
    }
    </style>
<body>
    <div id="container">
   <header style="background-color: #484848; color: white; padding: 20px; font-family: cursive;">Ubah Data</header>
   <div style="display: table; margin-left: auto; margin-right: auto;">
    <form action="update.php" method="POST">
    	<table style="padding: 50px; background-color: green; margin-top: 30%; margin-bottom: 40%;">
    		<input type="hidden" name="nikAwal" value="<?php echo $nikAwal?>">
    		<tr>
    			<td>NIM</td>
    			<td>:</td>
    			<td><input type="text" name="nik" value="<?php echo $row['nik']?>"></td>
    		</tr>

    		<tr>
    			<td>NAMA</td>
    			<td>:</td>
    			<td><input type="text" name="nama" value="<?php echo $row['nama']?>"></td>
    		</tr>

            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']?>"></td>
            </tr>

    		<tr>
    			<td>ALAMAT</td>
    			<td>:</td>
    			<td><input type="text" name="alamat" value="<?php echo $row['alamat']?>"></td>
    		</tr>
             <button type="submit" style="position: absolute; margin-top: 20%;" onclick="return confirm('Data Berhasil di Ubah');">Edit Data</button>
    	</table>
 	
       
    </form>
   
</div>
</div>
        <div class="footer">
            <br>
            <img src="../kuansing.png" style="border-radius: 0% 0% 40% 40%; width: 20px;">
            <span style="padding-right: 20px">PemDes Sungai Bawang</span>
            <p>Created by<a href="https://www.instagram.com/lauren_aji11" style="color: aqua; text-decoration: none; padding: 20px">Lauren_Aji</a></p>
        </div>
</body>
</html>

