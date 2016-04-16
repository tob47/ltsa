<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
	$id = $_POST['id_kel'];
	$nama_kel = $_POST['nama_kel'];  
	$id_kec = $_POST['id_kec']; 
	$biaya_kir = $_POST['biaya_kir']; 
	
	$sql = " update kelurahan set nama_kel='$nama_kel',id_kec='$id_kec',biaya_kir='$biaya_kir' where id_kel='$id'";

	//echo $sql;
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