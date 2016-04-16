<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
	$id_kota = $_POST['id_kota'];
	$nama_kota = $_POST['nama_kota'];
	$biaya = $_POST['biaya'];

	$sql = " update biaya_kirim set nama_kota='$nama_kota', biaya='$biaya' where id_kota='$id_kota'";

	//echo $sql;
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