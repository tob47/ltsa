<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
	$id_kel= $_POST['id_kel'];
	$nama_kel = $_POST['nama_kel']; 
	$id_kec= $_POST['id_kec']; 
	$biaya_kir= $_POST['biaya_kir'];
	
	$sql = "INSERT INTO kelurahan(id_kel,nama_kel,id_kec,biaya_kir)
		VALUES('$id_kel', '$nama_kel', '$id_kec', '$biaya_kir')";
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=desa&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=desa&status=1');
	}
	mysql_close();
}
?>
