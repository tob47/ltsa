<h2><i class="fa fa-money"></i> Pembayaran</h2>
	<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<tr>
<td>No </td>
<td>No Pesan</td><td>Tgl_pembayaran</td><td>Total Harga</td><td>Status</td><td>Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
if(isset($_GET['del'])){
$no_pembayaran=$_GET['id'];
$hapus ="delete from pembayaran where no='$no_pembayaran'";
mysql_query($hapus) or die(mysql_error());
}
if(isset($_GET['app'])){
$no_pembayaran=$_GET['id'];
$app ="update  pembayaran set status='sudah' where no='$no_pembayaran'";
mysql_query($app) or die(mysql_error());
}
$sql="";
if(isset($_POST['btnCari'])){
$cari=$_POST['cari'];
//ambil data dari table admin
$sql="SELECT * FROM  pembayaran where no_pembayaran like '%$cari%'";
}else{
$sql="SELECT * FROM  pembayaran";
}

$result=mysql_query($sql) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
$ada = $rows['status'];
// menentukan ket
	if ($ada == 'belum') {
		$ket = "Belum Bayar";
		}
	else {
	 $ket = "Sudah Bayar";
	 }
?>
<tr>

<td><?php  echo $no;?></td>

<td><?php  echo $rows['kd_pesan'];?></td>

<td><?php  echo $rows['tanggal'];?></td>

<td><?php  echo format_rupiah($rows['total_bayar']);?></td>
<td><?php  echo $ket;?></td>

<td>
<a href="index.php?fo=tampil&pg=bayar&app=true&id=<?php echo $rows['no']?>" class="btn btn-primary">
<i class="fa fa-check"></i> Sudah</a>  |
<a href="index.php?fo=tampil&pg=bayar&del=true&id=<?php echo $rows['no']?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
<i class="fa fa-trash-o"></i></a>
</td>
</tr>

<?php
$no++;
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

