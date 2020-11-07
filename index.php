<!DOCTYPE html>
<html>
<head>
	<title>HTML dan CSS</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous"></link> 
<link href="https://fonts.googleapis.com/css?family=Quicksand|Viga&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="homee.css">
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		.sidebar{
			background: linear-gradient(to bottom, #000066 0%, #ff99cc 100%);
			float: left;
			width: 20%;
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

		.aku{
			border-radius: 50%;
			width: 150px;
			height: 150px;
			padding: 30px;
		}

		
		.tab {
		  float: left;
		  width: 20%;
		  height: 250px;
		  position: fixed;

		}

		
		.tab button {
		  display: block;
		  background-color: inherit;
		  color: white;
		  padding: 18px 16px;
		  width: 100%;
		  border: none;
		  outline: none;
		  text-align: left;
		  cursor: pointer;
		  transition: 0.3s;
		  font-size: 17px;
		}

	
		.tab button:hover {
		  background: linear-gradient(to bottom, #000066 0%, #666699 100%);
		}

		
		.tab button.active {
		  background-color: #ccc;
		}

		.tabcontent {
		  float: right;
		  padding: 0px 12px;
		  
		  width: 78%;
		  
		  height: 500px;
		}

		

	</style>
</head>
<body>
	<div class="sidebar">
		<div class="sidebar1">
		<img class="aku" src="aku.JPG">
		<h3>Laurentius Seto Aji Pamungkas</h3>
		<h4>Musician || F.Player || Student</h4>
		</div>	
	
		
		<div class="tab">
 			<button class="tablinks" onclick="masuk(event, 'Dashboard')" id="defaultOpen">Dashboard</button>
 			<button class="tablinks" onclick="masuk(event, '#')">Components</button>
  			<button class="tablinks" onclick="masuk(event, 'Tables')">Tables</button>
  			<button class="tablinks" onclick="masuk(event, 'formulir')">Forms</button>
  			<button class="tablinks" onclick="masuk(event, '#')">About</button>
  			<button class="tablinks" onclick="masuk(event, '#')">Settings</button>
		</div>
	</div>	





	<div id="Dashboard" class="tabcontent">
  <header>

	<h4 class="h4">Musik Indo</h4>
		<div class="m"><marquee width="500" height="40">Berbicara tentang Musik Filosopi</marquee></div>
		
</header>

	<ul>   
		<li><a href="home.html">Home</a></li>
		<li><a href="Profill.html">Profil</a></li>
		<li><a href="Lagu.html">Lagu</a></li>
		<li><a href="video.html">Video</a></li>
			<form class="form">
 			 		<input class="search" type="text" placeholder="Cari..." required>	
 			 		<input class="button" type="button" value="Cari">		
			</form>
	</ul>
<img class="gitar" src="guitar.PNG">

	
		<div class="gradien">
			<h1>Welcome To My Web</h1>
			<h3 class="h3">Talk About Music</h3>
		</div>
		<div class="a-slider">
				<div class=isi-slider>
					<img src="z.JPG">
					<img src="x.JPG">
					<img src="c.JPG">
				</div>
		</div>
	<article>
		<div class="a">
	<img class="kopi" src="koppi.JPG">
	<span><h5>Filosopi Kopi</h5></span><br>
	
	<img class="kopi" src="b.JPG">
	<a href="filosopixfourtwnty.html"><h5>Apa sih Hubungan Filosopi Kopi dengan Band yang melejit ini?</h5></a>
		</div>
	</article>

	
<footer>
	<span>Filosopi Kopi</span>
	<p>Created by <a href="https://www.instagram.com/lauren_aji11">AjiBangke</a></p>

</footer>
</div>




<div id="Tables" class="tabcontent">
 	<table border="1" cellpadding="5">
		<tr>
			<th colspan="6" bgcolor="skyblue">Time Table</th>
			
		</tr>
		<tr>
			<th rowspan="6" bgcolor="yellow">Hours</th>
			<th>Mon</th>
			<th>Tue</th>
			<th>Wed</th>
			<th>Thu</th>
			<th>Fri</th>
		
		</tr>

		<tr>
			<td>science</td>
			<td>math</td>
			<td>science</td>
			<td>matd</td>
			<td>arts</td>
		</tr>

		<tr>
			<td>social</td>
			<td>history</td>
			<td>english</td>
			<td>social</td>
			<td>sports</td>
			
		
		</tr>

		<tr>
			<th colspan="5" >lunch</th>
		</tr>
		<tr>
			<td>science</td>
			<td>math</td>
			<td>science</td>
			<td>matd</td>
			<td rowspan="2">project</td>
			
		
		</tr>
		<tr>
			<td>social</td>
			<td>history</td>
			<td>english</td>
			<td>social</td>
		</tr>


	</table>
</div>



<div id="formulir" class="tabcontent">
  	 <h1 align="center">Formulir Biodata</h1>
    <form names="form1" method="post">
        <!-- Pembuatan layout menggunakan table -->
        <table width="90%" border="0" align="center">
            <tr>
                <td width="25%">
                    <label for="nama">Nama Lengkap</label>
                </td>
                <td>:</td>
                <td>
                    <input type="text" name="txtname" id="name" placeholder="Masukkan nama anda">
                </td>
            </tr>

            <tr>
                <td width="25%">
                    <label for="TanggalLahir">TanggalLahir</label>
                </td>
                <td>:</td>
                <td>
                    <input type="date" name="TanggalLahir" id="TanggalLahir">
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="Pria" id="male">
                    <label for="male">Pria</label>

                    <input type="radio" name="jk" value="Wanita" id="female">
                    <label for="female">Wanita</label>

                </td>
            </tr>

            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi" id="hobi" value="Coding">
                    <label for="hobi">Coding</label>

                    <input type="checkbox" name="hobi" id="hob1i" value="Desain">
                    <label for="hobi">Desain</label>

                    <input type="checkbox" name="hobi" id="hobi2" value="Menulis">
                    <label for="hobi">Menulis</label>
                </td>
            </tr>

            <tr>
                <td><label for="agama">Agama</label></td>
                <td>:</td>
                <td>
                    <select id="agama" name="agama">
                        <option value="islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label for="upload">Unggah Gambar</label></td>
                <td>:</td>
                <td><input type="file" name="file" id="upload" multiple=""></td>
            </tr>

            <tr>
                <td><label for="warna">Pilih warna kesukaan</label></td>
                <td>:</td>
                <td><input type="color" name="color" id="warna"></td>
            </tr>

            <tr>
                <td><label for="pesan">Kritik dan saran</label></td>
                <td>:</td>
                <td><textarea name="saran" id="pesan" cols="50" rows="3"></textarea></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Kirim">
                    <input type="reset" name="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</div>


<script>
function masuk(evt, navbar) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(navbar).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>

<link href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
</body>
</html>