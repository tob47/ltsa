<html>
<?php 
include ('../../include/functions.inc.php');
include ('../inc/config.php');

$sql="SELECT * FROM  profil";

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
$rows=mysql_fetch_array($result);
?>
<meta charset="utf-8">
	<link rel="shortcut icon" href="../../img/icon_market.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Laporan Data Pemesanan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<style>
@media print {
input.noPrint { display: none; }
}
</style> 
	<body>
	<div class="container">
		<h2 align="center"> Laporan Data Pemesanan</h2>
		<h1 align="center"> E-Commerce <?php echo $rows['nama'];?> </h1>
		<p align="center">
		<?php echo $rows['alamat'];?>, Telp : <?php echo $rows['telp'];?> Email : <?php echo $rows['email'];?>
		</p>
		<hr>
		<br/> 
		<center><div style=padding:10px;>
	<input class="noPrint" type="button" value="Cetak Laporan" class="btn btn-primary" onClick="window.print()">
</div></center>
		<table class="table" border="1" align='center'> 
<tr>
  <td colspan="5"><i class="fa fa-envelope-o"></i> Pemesanan</td>
  <td>&nbsp;</td>
  <td colspan="3"><i class="fa fa-money"></i> Pembayaran</td>  
  </tr>
<tr>
<td>Kode Pesan</td><td>Tgl Pesan</td><td>Harga Produk</td><td>Biaya Kirim</td><td>Harus Transfer</td><td>.. </td><td>Tanggal Bayar</td><td>Total Bayar</td><td>Ket.</td> </tr>

			<?php 

$sql="SELECT pesan.*,produk.* from pesan,produk where pesan.kd_produk=produk.kd_produk and produk.stok='true'
		and pesan.status ='sudah' order by kd_pesan desc";

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
 
</tr>
			<?php 
				}
			?>
		</table>
		<?php mysql_close();
?>
</div>
	</body>
	 <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
 	
	<!-- Script to validasi -->
		<script src="../../js/valid/jquery.js"></script>
</html>