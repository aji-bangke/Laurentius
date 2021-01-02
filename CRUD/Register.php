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
h3{
	color: white;
	text-align: center;
}
body{
    height: 100vh;
    background: linear-gradient(to bottom, #993333 0%, #000066 100%);
}

.css{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    
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
a{
  color: white;
  float: right;
}


</style>

</head>
<body>


<?php

    session_start();

    $username = "";
    $password ="";
    $email = "";
    $usernameErr = "";
    $passwordErr = "";
    $emailErr = ""; 
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

       if(empty($_POST["email"])){
        $emailErr = "Email tidak boleh kosong!";
      }else{
        $email = cek($_POST["email"]);
        
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

      if($username !="" && $password != "" && $email != ""){
       
        $_SESSION["username"] = $username;
       echo "<script>alert('Anda berhasil Registrasi!');history.go(-1);</script>";  
    }

    else{
    	
        $_SESSION["username"] = $username;
       echo "<script>alert('Data tidak boleh kosong!');history.go(-1);</script>";}

   
    }



    function cek($data){
      $data = trim($data); 
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data; 
    }
  ?>

<script type="text/javascript">
  function validasi() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    if (username != "" && email!="" && password !="") {
      return true;
    }else{
      alert('Anda harus mengisi data dengan lengkap !');
    }
  }
</script>

<div class="css">
<h3 >Register</h3><br>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
		<label for="username">Username</label> <i>*</i>
		<br>
		<input type="text" name="username" id="username" placeholder="masukkan username">
		<i><?php echo $usernameErr ?></i>
    <br>
    <label for="email">Email Address</label> <i>*</i>
    <br>
    <input type="text" name="email" id="email" placeholder="masukkan email">
    <i><?php echo $emailErr ?></i>
	
	<br><br>
		<label for="password">Create Password</label> <i>*</i>
		<br>
		<input type="password" name="password" id="password" placeholder="masukkan password">
		<i><?php echo $passwordErr ?></i>

		<button type="submit">Submit</button>
		<i><?php echo $error; ?></i>

    <a href="Login.php">Login?</a>
</div>
</form>

</body>
</html>