<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
	$id_kota = $_POST['id_kota'];
	$nama_kota = $_POST['nama_kota'];
	$biaya = $_POST['biaya'];

	$sql = "INSERT INTO biaya_kirim(id_kota,nama_kota,biaya)
		VALUES('$id_kota', '$nama_kota','$biaya')";
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=biaya&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=biaya&status=1');
	}
	mysql_close();
}
?>
