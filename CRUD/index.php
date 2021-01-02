<?php 

	require 'konek.php';
	$sql = "SELECT * FROM mahasiswa";
    $result = $conn->query($sql);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style type="text/css">
	html, body {
     height:100%;
}
	.a-slider { 

	position: relative; 
	overflow: hidden; 
	
}
 
.a-slider { 
	margin: 20px auto;
	width: 768px;
	height: 450px; 
}  
 
.isi-slider img { 
	width: 768px;
	height: 450px; 
	float: left;
}
 
.isi-slider { 
	position: absolute; 
	width: 3900px;  
 
	/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
	animation-name: slider;
	animation-duration: 10s;
	animation-timing-function: ease-in-out;
	animation-iteration-count: infinite;
}
.isi-slider:hover { 
		animation-play-state: running;
}

 
.a-slider:after { 
	font-size: 150px; 
	position: absolute; 
	z-index: 12; 
	color: rgba(255,255,255, 0); 
	left: 300px; top: 80px; 
	transition: 2s all ease-in-out; 
}
.a-slider:hover:after { 
	color: rgba(255,255,255, 0.6);  
}
@keyframes slider {     
	0% {
		left: 0; opacity: 0; 
	}     
	2% {
		opacity: 1; 
	}     
	20% {
		left: 0; opacity: 1; 
	}     
	21% {
		opacity: 0; 
	}     
	24% {
		opacity: 0; 
	}     
	25% {
		left: -768px; opacity: 1; 
	}     
	45% {
		left: -768px; opacity: 1; 
	}     
	46% {
		opacity: 0; 
	}     
	48% {
		opacity: 0; 
	}     
	50% {
		left: -1536px; opacity: 1; 
	}     
	70% {
		left: -1536px; opacity: 1; 
	}     
	72% {
		opacity: 0; 
	}     
	74% {
		opacity: 0; 
	}    
	75% {
		left: -2304px; opacity: 1; 
	}   	
	95% {
		left: -2304px; opacity: 1; 
	}   	
	97% { 
		left: -2304px; opacity: 0; 
	} 
 
	100% {
		left: 0; opacity: 0; 
	}
}
	#container{
		  min-height: 100%;
    position: relative;
	}
	.footer{
    width: 100%;
    background-color: #484848;
    color: #fff;
    text-align: right;
    bottom: 0px;
	}
	

</style>
 </head>

 <body>
<div id="container">
 	<header style="background-color: #484848; color: white; padding: 20px; font-family: cursive;">Sistem Informasi
 	</header>
 	<br>
 	<br>
 	<div style="display: block; text-align: center;">
	 	<a href="data/tambah.php">
	 		<button style="width: 230px; background-color: white;"><img src="tambahhh.png" width="100%">
	 		<b style="font-family: cursive;">Pendataan</b></button>
	 	</a>


	 	<a href="lihat.php">
	 		<button style="width: 236px; background-color: white;"><img src="penduduk.png" width="100%">
	 		<b style="font-family: cursive;">Kependudukan</b></button>
	 	</a>

	 	<a href="">
	 		<button style="width: 224px; background-color: white;"><img src="map.png" width="100%">
	 		<b style="font-family: cursive;">Wilayah Desa</b></button>
	 	</a>

	 	<a href="informasi.php">
	 		<button style="width: 224px; background-color: white;"><img src="infoo.jpg" width="100%">
	 		<b style="font-family: cursive;">Informasi</b></button>
	 	</a>
 	</div>
 	<br>
 	<br>
 	<br>
 	<p style="font-family: cursive; background-color: #484848; color: white; padding: 20px;">Bakti Sosial</p>
 	
 		<div class="a-slider">
				<div class=isi-slider>
					<img src="kukerta.jpeg">
					<img src="berat.jpg">
					<img src="blt.jpg">
				</div>
		</div>


</div>
		<div class="footer">
		 	<br>
		 	<img src="kuansing.png" style="border-radius: 0% 0% 40% 40%; width: 20px;">
			<span style="padding-right: 20px">PemDes Sungai Bawang</span>
			<p>Created by<a href="https://www.instagram.com/lauren_aji11" style="color: aqua; text-decoration: none; padding: 20px">Lauren_Aji</a></p>
		</div>
 </body>

</html>