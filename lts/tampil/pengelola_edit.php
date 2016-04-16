<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['edit'])) { 
	$kode_pengelola = $_POST['kode_pengelola'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$passwords = md5($password); 
	$sql="update pengelola set username='$username', password='$passwords' where kode_pengelola='$kode_pengelola'"; 
	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=admin&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=admin&status=1');
	}
	mysql_close();
}
?>