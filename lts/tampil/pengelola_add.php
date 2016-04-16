<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambahPengelola'])) {
	$kode_pengelola = $_POST['kode_pengelola'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	$password = md5($password);
	$sql = "INSERT INTO pengelola(kode_pengelola,username,password)
		VALUES('$kode_pengelola','$username', '$password')";
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
