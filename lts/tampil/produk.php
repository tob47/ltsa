 <h2> <i class="fa fa-hdd-o"></i> Produk </h2>
	<hr>
	<p>
	</p>
	<?php include ('inc/config.php');?>
<table class="table table-striped">
<a href="index.php?fo=tampil&pg=produk_form_add" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a> | 
<a href="tampil/produk_cetak.php" target='_blank' class="btn btn-info"><i class="fa  fa-print Cetak"></i> Cetak</a>
<p></p>

<tr>
<td>Kode Produk</td><td> Nama</td><td> Stock</td><td> Harga</td><td>Tools</td></tr>
	<?php
/*
* kode untuk menghapus data
*/
if(isset($_GET['del'])){
$kd_produk=$_GET['id'];
$hapus ="delete from produk where kd_produk='$kd_produk'";
mysql_query($hapus) or die(mysql_error());

}
 
$sql="SELECT * FROM  produk order by kd_produk desc";
 

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
while($rows=mysql_fetch_array($result)){
	
	$ada = $rows['stok'];
// menentukan ket
	if ($ada == 'false') {
		$ket = "Tersedia";
		}
	else {
	 $ket = "Terjual";
	 }

?>
<tr>

<td><?php  echo $rows['kd_produk'];?></td>

<td><?php  echo $rows['nama_produk'];?></td>

<td><?php  echo $ket;?></td>
<td><?php  echo format_rupiah($rows['harga']);?></td>
<td>
<a href="index.php?fo=tampil&pg=produk_form_edit&id=<?php echo $rows['kd_produk'];?>"> 
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=produk&del=true&id=<?php echo $rows['kd_produk'];?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
 <i class="fa fa-trash-o"></i></a> 
</td>
</tr>

<?php
}
//tutup koneksi
?>

</table>
<?php
if (isset($_GET['status'])) {
	if ($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "Operasi gagal";
	}
}

mysql_close();
//close database
 
?>