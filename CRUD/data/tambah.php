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
    <header style="background-color: #484848; color: white; padding: 20px; font-family: cursive;">Pendataan</header>
	<div style="display: table; margin-right: auto; margin-left: auto;">
    <form action="store.php" method="POST">
    	<table style="padding: 50px; background-color: green; margin-top: 30%;" >
    		<tr>
    			<td>NIK</td>
    			<td>:</td>
    			<td><input type="text" name="nik" id="nik" width="20px" required></td>
    		</tr>

    		<tr>
    			<td>NAMA</td>
    			<td>:</td>
    			<td><input type="text" name="nama" id="nama" required></td>
    		</tr>

            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td><input type="text" name="jenis_kelamin" id="jenis_kelamin" required></td>
            </tr>

    		<tr>
    			<td>ALAMAT</td>
    			<td>:</td>
    			<td><input type="text" name="alamat" id="alamat" required></td>
    		</tr>
           <button onclick="klik()" style="font-family: cursive;  position: absolute; margin-top: 20%;">Tambah Data</button>
    	</table>
            
    </form>
    
    <script type="text/javascript">
        function klik() {
            var nik = document.getElementById('nik').value;
            var nama = document.getElementById('nama').value;
            var jenis_kelamin = document.getElementById('jenis_kelamin').value;
            var alamat = document.getElementById('alamat').value;
            if (nik=="" || nama=="" || jenis_kelamin=="" || alamat=="") {
               alert('Data Belum Lengkap!');
            } else {
               alert('Data Berhasil ditambahkan!');

            }
        }
    </script>
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

