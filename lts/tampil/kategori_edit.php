<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
	$kd_kategori = $_POST['kd_kategori'];
	$nama_kategori = $_POST['nama_kategori'];


	$sql = " update kategori set 
	nama_kategori='$nama_kategori'
	where kd_kategori='$kd_kategori'";

	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=kategori&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=kategori&status=1');
	}
	mysql_close();
}
?>