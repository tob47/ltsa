<h2><i class="fa fa-envelope-o"></i> Pemesanan</h2>
	<hr>
	<p> 
	
<a href="tampil/pesan_cetak.php" target='_blank' class="btn btn-info"><i class="fa  fa-print Cetak"></i> Cetak</a> | |

	<i class="fa fa-check"></i> Tombol untuk Merubah Status, 
	<i class="fa fa-times"></i> Tombol untuk Merubah Status menjadi Gagal Pemesanan,  </p>
	<hr>
<?php
include ('inc/config.php');
?>

<table class="table table-bordered table-striped">
<tr>
  <td colspan="5"><i class="fa fa-envelope-o"></i> Pemesanan</td>
  <td>&nbsp;</td>
  <td colspan="3"><i class="fa fa-money"></i> Pembayaran</td> 
  <td colspan="2"><i class="fa fa-coffee"></i> Tolls</td>
  </tr>
<tr>
<td>Kode Pesan</td><td>Tgl Pesan</td><td>Harga Produk</td><td>Biaya Kirim</td><td>Harus Transfer</td><td>.. </td><td>Tanggal Bayar</td><td>Total Bayar</td><td>Ket.</td><td>Status</td><td>Pesan </td> </tr>


<?php
/*
* kode untuk menghapus data
*/
if(isset($_GET['del'])){
$kd_pesan =($_GET['id']); 
$hapus ="delete from pesan where kd_pesan='$kd_pesan'";
mysql_query($hapus);
}
if(isset($_GET['app'])){
$kd_pesan=$_GET['id'];
$app ="update pesan set status='sudah' where kd_pesan='$kd_pesan'";
mysql_query($app) or die(mysql_error());
}

if(isset($_GET['upp'])){
$kd_pesan=$_GET['id'];
$upp ="update pesan set status='gagal' where kd_pesan='$kd_pesan'";
mysql_query($upp) or die(mysql_error());
}

 
$sql="SELECT pesan.*,produk.* from pesan,produk where pesan.kd_produk=produk.kd_produk and produk.stok='true'
		and pesan.status !='gagal' order by kd_pesan desc";


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

<td><?php echo $rows['kd_pesan'];?></td> 
<td><?php  echo $rows['tgl_pesan'];?></td>
<td><?php  echo format_rupiah($rows['total_bayar']);?></td>
<td><?php  echo format_rupiah($rows['biaya_kirim']);?></td>
<td><?php  echo format_rupiah($rows['biaya']);?></td>
<td> ..</td>
<td><?php echo $rows['tanggal_bayar'];?> </td>
<td><?php echo format_rupiah($rows['total_pembayaran']);?> </td> 
<td><?php echo $ket;?> </td> 
<td>
<?php
if ($ada == 'sudah') {
?> 
<a class="btn btn-primary" title="Print" target="_blank" href="tampil/pesan_cetak_r.php?id=<?php echo $rows['kd_pesan'];?>"> 
<i class="fa fa-print"></i></a>
 <?php
 }else {
?>
<a href="index.php?fo=tampil&pg=pesan&app=true&id=<?php echo $rows['kd_pesan']?>" class="btn btn-primary" title="Merubah Status">
  <i class="fa fa-check"></i></a> 
<?php
} 

  ?>
  </td>
 
<td>
<?php
if ($ada == 'belum') {
?> 
<a href="index.php?fo=tampil&pg=pesan&upp=true&id=<?php echo $rows['kd_pesan']?>" class="btn btn-info" title="Gagal Pembayaran"> 
 <i class="fa fa-times"></i> Gagal </a>
 <?php
 } 

  ?>
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
		echo "operasi gagal";
	}
}

mysql_close();
//close database

//tampilan siapa yang login
?>

