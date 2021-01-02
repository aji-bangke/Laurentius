<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['Login']);
session_destroy();
header("Location: Login.php");
?>