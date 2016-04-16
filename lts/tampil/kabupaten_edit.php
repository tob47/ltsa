<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
	$id = $_POST['kd_kab'];
	$nama_kab = $_POST['nama_kab']; 
	
	$sql = " update kabupaten set nama_kab='$nama_kab' where kd_kab='$id'";

	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=kabupaten&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=kabupaten&status=1');
	}
	mysql_close();
}
?>