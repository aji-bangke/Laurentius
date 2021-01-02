<!DOCTYPE html>
<html>
<head>
	<title>form login</title>

<style type="text/css">	
        *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
h1{
	color: white;
	text-align: center;
}
body{
    height: 100vh;
    background-image: url(kutai.jpg);
    background-repeat: no-repeat; 
    background-size: 100%;

   
}

.css{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 30px 30px;
    width: 400px;
    background-color: rgba(0,0,0,0.8);
    
}

label{
    text-align: left;
    color: yellow;
}
input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: white;
    font-size: 20px;
}
button{
    width: 100%;
    padding: 5px 0;
    border: none;
    background-color:#2979ff;
    font-size: 18px;
    color: #fafafa;
}
i{
	color: red;

}

p{
  float: right;
  color: white;
}
</style>

</head>
<body>


<?php

    session_start();

    $username = "";
    $password ="";
    $usernameErr = "";
    $passwordErr = "";
    $error = "";
	

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if(empty($_POST["username"])){
        $usernameErr = "Username tidak boleh kosong!";
      }else{
        $username = cek($_POST["username"]);
        if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]*$/',$username)) {
          $usernameErr = "Username setidaknya mengandung 1 huruf kecil, 1 huruf kapital, dan 1 angka!";
        }
      }

      if(empty($_POST["password"])){
        $passwordErr = "Password tidak boleh kosong!";
      }
      else{
        $password = cek($_POST["password"]);
        if (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z!@#$%]*$/',$password)) {
            $passwordErr = "Password setidaknya mengandung 1 huruf kecil, 1 huruf kapital, dan 1 angka!";
          }
      }

      if($username == "Aji00" && $password == "Bangke00"){
       
        $_SESSION["username"] = $username;
        header("Location: http://localhost/crud/framee.php");
    }
    else{
    	$error = "* Username dan Password tidak sesuai";}
    }

    function cek($data){
      $data = trim($data); 
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data; 
    }
  ?>


<div class="css">
<h1>WELCOME</h1><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
		<label for="username">Username Admin</label> <i>*</i>
		<br>
		<input type="text" name="username" id="username" placeholder="masukkan username">
		<i><?php echo $usernameErr ?></i>
	
	<br><br>
		<label for="password">Password Admin</label> <i>*</i>
		<br>
		<input type="password" name="password" id="password" placeholder="masukkan password">
		<i><?php echo $passwordErr ?></i>

		<button type="submit">Masuk</button>
		<i><?php echo $error; ?></i>
    <br>
     <a href="framee.php" style="float: right; background-color: red; padding: 8px; margin-top: 10px; color: white; text-decoration: none;">Masuk Sebagai Tamu</a>
</div>
</form>
 
</body>
</html>