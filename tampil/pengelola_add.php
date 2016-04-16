<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambahPengelola'])) { 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = 'admin';

	$password = md5($password);
	$sql = "INSERT INTO pengelola(username,password,level)
		VALUES('$username', '$password', '$level')";
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
	echo "<script>window.location='?fo=tampil&pg=admin&status=0'</script>";  
	} else { 
	echo "<script>window.location='?fo=tampil&pg=admin&status=1'</script>"; 
	}
	mysql_close();
}
?>
