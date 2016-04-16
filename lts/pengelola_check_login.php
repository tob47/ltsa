<?php
session_start(); 
//file konfigurasi
include ('inc/config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$password = md5($password);

$sql= "select * from pengelola where username='$username'
  and password='$password' ";

$userquery = mysql_query($sql) or die(mysql_error());
// 	$valid=false;
if (mysql_num_rows($userquery) == 1) { 
	echo "<script>window.location='utama.php'</script>";  
	$valid = true;
	$_SESSION['username'] = $username;
}

if ($valid == false) {
	header("Location:index.php?status=1");
}
?>

