<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['edit'])) {
	$kd_produk = $_POST['kd_produk'];
	$kd_kategori = $_POST['kd_kategori']; 
	$harga = $_POST['harga'];
	
	$deskripsi = $_POST['deskripsi']; 
	$nama_produk = $_POST['nama_produk'];
	
	
$lokasi_file = $_FILES['upload']['tmp_name'];

$nama_file = $_FILES['upload']['name'];

$tipe_file = $_FILES['upload']['type'];

$ukuran_file = $_FILES['upload']['size']; 

$upload = $nama_file;

$direktori = "../upload/$nama_file";
 

if(move_uploaded_file($lokasi_file, $direktori)){
$sql = "update produk set kd_kategori='$kd_kategori', harga='$harga', deskripsi='$deskripsi', upload='$nama_file', nama_produk='$nama_produk' where kd_produk='$kd_produk'";
 }else{
	$sql = "update produk set kd_kategori='$kd_kategori' , harga='$harga' , deskripsi='$deskripsi', nama_produk='$nama_produk' where kd_produk='$kd_produk'";
	 
	}
	//echo $sql;
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		echo "<script>window.location='?fo=tampil&pg=produk&status=0'</script>";
	} else {
		echo "<script>window.location='?fo=tampil&pg=produk&status=1'</script>";
	} 
}
?>