<!DOCTYPE html>
<html>
<head>
	<title>HTML dan CSS</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous"></link> 
<link href="https://fonts.googleapis.com/css?family=Quicksand|Viga&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.sidebar{
			background-color: black;
			float: left;
			width: 100%;
			height: 100%;
			text-align: center;
			font-family: Palatino Linotype;  
			color: whitesmoke;
			position: fixed;
			

		}

		.sidebar1{
			text-align: center;
			border-bottom: solid 1px;
			padding: 10px;
			
		}

		ul{
			display: block;
			text-align: center;
			
			
		}
		img{
			border-radius: 0% 0% 40% 40%;
			width: 100px;
			height: 120px;
			padding: 30px;
			
		}

		li a:hover{
			display: block;
			background-color: yellow;
			transition: 0.4s;
			margin: 10px;
			padding: 10px;
		}

		li a{
			display: block;
			font-family: Palatino Linotype;
			text-decoration: none;
			color: white;
			text-align: left;
			padding-left: 20px;
			margin: 10px;
			padding: 10px;

		}


	</style>
</head>
<body>
	<div class="sidebar">
		<div class="sidebar1">
		<img src="kuansing.png">
		<h3>Pemerintahan Desa Sungai Bawang</h3>
		<marquee>TP.2019/2024</marquee>
		<h4 align="">Singingi || Kuansing || Riau</h4>
		</div>	
	
		<ul>
			<li><a href="index.php" target="Home" onclick="document.getElementById('dashboard')"><i aria-hidden='true' class='fa fa-home'/> Home</i></a></li>
			<li><a href="info.php" target="Home"><i aria-hidden='true' class='fa fa-bars'/> Tentang Desa</i></a></li>
			<li><a href="lihat.php" target="Home"><i aria-hidden='true' class="fal fa-table"> Kependudukan</i></a></li>
			<li><a href="struktur.php" target="Home"><i aria-hidden='true' class="fab fa-wpforms"> Struktur</i></a></li>
			<li><a href="sekretariat.php" target="Home"><i aria-hidden='true' class='fa fa-user'/> Sekretariat</i></a></li>
			<li><a href="#"><i aria-hidden='true' class="fas fa-wrench"> Pelayanan</i></a></li>
		</ul>
	</div>	
<link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
</body>
</html>