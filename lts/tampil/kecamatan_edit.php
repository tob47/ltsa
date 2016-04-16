<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
	$id = $_POST['id_kec'];
	$nama_kec = $_POST['nama_kec'];  
	$kd_kab = $_POST['kd_kab']; 
	
	$sql = " update kecamatan set nama_kec='$nama_kec',kd_kab='$kd_kab' where id_kec='$id'";

	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=kecamatan&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=kecamatan&status=1');
	}
	mysql_close();
}
?>