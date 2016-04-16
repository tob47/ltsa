<h2><i class="fa fa-th-large"></i> Detail Pemesanan</h2>
	<hr>
	<p>
	<i class="fa fa-reply btn btn-info"></i> Tombol untuk Mengembalikan Prodak Menjadi Tersedia,  </p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<tr> <td>No Pesan</td><td>Nama Produk</td> <td>Total Pesan</td><td>Status</td> <td>Kembalikan Prodak</td></tr>

<?php
/*
* kode untuk menghapus data
*/
if(isset($_GET['del'])){
$no_det_pesan=$_GET['id'];
$hapus ="delete from det_pesan where no_det_pesan='$no_det_pesan'";
mysql_query($hapus) or die(mysql_error());
}

// update menjadi tersedia
if(isset($_GET['upp'])){
$kd_produk=$_GET['id'];

$upp ="update produk set stok='false' where kd_produk='$kd_produk'";
$resultt = mysql_query($upp) or die(mysql_error());
		if ($resultt){
		$hapus ="delete from det_pesan where kd_produk='$kd_produk'";
		mysql_query($hapus) or die(mysql_error());
		}
}
  
$sql="SELECT det_pesan.*,pesan.*,produk.* from det_pesan,pesan,produk where det_pesan.no_pesan=pesan.kd_pesan 
		and det_pesan.kd_produk=produk.kd_produk
		and produk.stok='true'
		order by det_pesan.no_det_pesan desc";
  
$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
while($rows=mysql_fetch_array($result)){
$ada = $rows['status'];
// menentukan ket
	if ($ada == 'belum') {
		$ket = "Belum Bayar";
		}
	elseif ($ada == 'gagal') {
		$ket = "Pemesanan Gagal";
		}
	else {
	 $ket = "Sudah Bayar";
	 }
	 
 
?>
<tr>
  
<td><?php echo $rows['no_pesan'];?></td>

<td><?php  echo $rows['nama_produk'];?></td>
 
<td><?php  echo $rows['total_pesan'];?></td>

<td><?php  echo $ket;?></td>
 
<td>
<?php
if ($ada == 'gagal') {
?> 
<a href="index.php?fo=tampil&pg=det_pesan&upp=true&id=<?php echo $rows['kd_produk']?>" class="btn btn-info" title="Mengembalikan Prodak Menjadi Tersedia"> 
 <i class="fa fa-reply"> </i> Kembalikan</a>
 <?php
 }
 else{
 ?>
 
 Belum Gagal Pesan
 <?php } ?>
 </td>
</tr>

<?
}

//tutup koneksi
?>
 
</table>
<?php
if (isset($_GET['status'])) {
	if ($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}

mysql_close();
//close database
 
?>

