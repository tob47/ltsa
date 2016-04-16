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

    <title> Laporan Data Produk</title>

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
		<h2 align="center"> Laporan Data Produk</h2>
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
				<td>No</td><td>Kd produk</td><td>Nama Produk</td><td>Stock</td>
				<td>Harga</td>
			</tr>
			<?php

$sql="SELECT * FROM  produk where stok='false' order by kd_produk asc";

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
$no=1;
$rowss=mysql_fetch_array($result);
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
			<tr>	<td><?php echo $no;?></td>
				<td><?php	echo $rows['kd_produk'];?></td>
				<td><?php		echo $rows['nama_produk'];?></td>
				<td><?php		echo $ket;?></td>
				<td><?php		echo format_rupiah($rows['harga']);?></td>
			</tr>
			<?php
			$no++;	
			
				}
			?>
			
		</table>
		 
		<p>&nbsp;
		
		</p>
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