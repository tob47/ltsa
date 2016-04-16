<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
	$kd_kab = $_POST['kd_kab'];
	$nama_kab = $_POST['nama_kab']; 
	$sql = "INSERT INTO kabupaten(kd_kab,nama_kab)
		VALUES('$kd_kab', '$nama_kab')";
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
