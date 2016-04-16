<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
	$kd_kec= $_POST['id_kec'];
	$nama_kec = $_POST['nama_kec']; 
	$kd_kab= $_POST['kd_kab'];
	$sql = "INSERT INTO kecamatan(id_kec,nama_kec,kd_kab)
		VALUES('$kd_kec', '$nama_kec', '$kd_kab')";
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
