<?php
include ('inc/config.php');
//data dari user
if (isset($_POST['tambah'])) {
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

$sql = null;
$MAX_FILE_SIZE = 1000000;
//100kb

//cek apakah file kosong? 
if(strlen($nama_file)<1){
	header("Location:index.php?fo=tampil&pg=produk_form_add&status=1");
	exit();
}

//cek apakah format file adalah format gambar
$formatgambar = array("image/jpg", "image/jpeg","image/gif", "image/png");
if(!in_array($tipe_file, $formatgambar)) {
  header("Location:index.php?fo=tampil&pg=produk_form_add&status=2");
	exit();
	}
//cek ukuran 
if($ukuran_file > $MAX_FILE_SIZE) {
  header("Location:index.php?fo=tampil&pg=produk_form_add&status=3");
	exit();
}

if (move_uploaded_file($lokasi_file, $direktori)) {

	$sql = "INSERT INTO produk(kd_produk,nama_produk,kd_kategori,harga,upload,deskripsi)
		VALUES('$kd_produk','$nama_produk','$kd_kategori','$harga','$upload','$deskripsi')";
	$result = mysql_query($sql) or die(mysql_error());

	//check if query successful
	if ($result) {
		header('location:index.php?fo=tampil&pg=produk&status=0');
	} else {
		header('location:index.php?fo=tampil&pg=produk&status=1');
	}
	mysql_close();
}
}
?>
