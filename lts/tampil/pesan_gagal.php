<h2><i class="fa fa-times"></i> Pemesanan Gagal</h2>
	<hr>
	<p> 
	<i class="fa fa-2x fa-warning"></i> Produk yang terdapat di pemesanan gagal sudah di kembalikan menjadi TERSEDIA!!! </p>
	<hr>
<?php
include ('inc/config.php');
?>
<table class="table table-bordered table-striped">
<tr>
  <td colspan="5"><i class="fa fa-envelope-o"></i> Pemesanan</td>
  <td>&nbsp;</td>
  <td colspan="3"><i class="fa fa-money"></i> Pembayaran</td> 
  <td colspan="1"><i class="fa fa-coffee"></i> </td>
  </tr>
<tr>
<td>No Pesan</td> <td>Tgl Pesan</td><td>Harga Produk</td><td>Biaya Kirim</td><td>Harus Transfer</td><td>.. </td><td>Tanggal Bayar</td><td>Total Bayar</td><td>Ket.</td><td>Tools</td></tr>


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

// update menjadi tersedia
if(isset($_GET['upp'])){
$kd_produk=$_GET['id'];
$upp ="update produk set stok='false' where kd_produk='$kd_produk'";
mysql_query($upp) or die(mysql_error());
}
  
	$sql="SELECT pesan.*,produk.* from pesan,produk where pesan.kd_produk=produk.kd_produk 
	and produk.stok='false'
	and pesan.status='gagal'
	order by kd_pesan desc";
	 
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
<a title="Hapus" class="btn btn-info" href="index.php?fo=tampil&pg=pesan_gagal&del=true&id=<?php echo ($rows['kd_pesan']);?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
<i class="fa fa-trash-o"></i></a></td>
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

//tampilan siapa yang login
?>

