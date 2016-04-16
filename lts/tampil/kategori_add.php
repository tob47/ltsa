<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
	$kd_kategori = $_POST['kd_kategori'];
	$nama_kategori = $_POST['nama_kategori'];


	$sql = "INSERT INTO kategori(kd_kategori,nama_kategori)
		VALUES('$kd_kategori', '$nama_kategori')";
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
