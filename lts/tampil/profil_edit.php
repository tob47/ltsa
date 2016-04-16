<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['submitUser'])) {
 
	$nama  = $_POST['nama'];
	$nama_pemilik  = $_POST['nama_pemilik'];
	$alamat  = $_POST['alamat'];
	$telp  = $_POST['telp'];
	$email  = $_POST['email']; 
	$an_bank  = $_POST['an_bank'];
	$nama_bank  = $_POST['nama_bank'];
	$rekening  = $_POST['rekening'];
	$tentang  = $_POST['tentang']; 


	$sql = "update profil set  nama='$nama', nama_pemilik='$nama_pemilik', alamat='$alamat', telp='$telp', email='$email', an_bank='$an_bank', nama_bank='$nama_bank', rekening='$rekening', tentang='$tentang'";

	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=profil&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=profil&status=1');
	}
	mysql_close();
}
?>