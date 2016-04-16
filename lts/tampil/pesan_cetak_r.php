 <html>
<?php 
include ('../../include/functions.inc.php');
include ('../inc/config.php');

$sqll="SELECT * FROM  profil";

$resultt=mysql_query($sqll) or die(mysql_error());

//proses menampilkan data
$rowss=mysql_fetch_array($resultt);
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
		<h2 align="center"> Nota Pemesanan</h2>
		<h1 align="center"> E-Commerce <?php echo $rowss['nama'];?> </h1>
		<p align="center">
		<?php echo $rowss['alamat'];?>, Telp : <?php echo $rowss['telp'];?> Email : <?php echo $rowss['email'];?>
		</p>
		<hr>
		<br/> 
		<center><div style=padding:10px;>
	<input class="noPrint" type="button" value="Cetak Nota" class="btn btn-primary" onClick="window.print()" />
</div></center>


	<?php 
$id = $_GET['id'];
$sql="SELECT pesan.*,produk.*,customer.*,kelurahan.*,kecamatan.*,kabupaten.* from pesan,produk,customer,kelurahan,kecamatan,kabupaten 
		where pesan.kd_produk=produk.kd_produk 
		and produk.stok='true'
		and pesan.status ='sudah' 
		and pesan.kd_pesan = customer.kd_pesan
		and pesan.kd_pesan='$id'
		and customer.id_kel=kelurahan.id_kel 
		and kelurahan.id_kec=kecamatan.id_kec 
		and kecamatan.kd_kab=kabupaten.kd_kab
		";

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data 
$rows=mysql_fetch_array($result);
$ada = $rows['status'];
// menentukan ket
	if ($ada == 'belum') {
		$ket = "Belum Bayar";
		}
	elseif ($ada == 'gagal') {
		$ket = "Pemesanan Gagal";
		}
	else {
	 $ket = "Lunas";
	 }
 ?>
 
<table width="536" height="333" > 
			<tr>
			  <td height="29" colspan="3">Nota Pembelian </td>
    </tr>
			<tr>
			  <td width="164" height="29"><label  for="nama">Kode Pesan</label></td>
				<td width="6">:</td>
				<td width="350"> <?php echo $rows['kd_pesan'];?> </td>
			</tr>
			<tr>
			  <td width="164" height="36"><label for="nama">Tgl Pesan</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['tgl_pesan'];?>			  </td>
			</tr>
			<tr>
			  <td width="164" height="31"><label for="nama"> Harga Produk</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo format_rupiah($rows['total_bayar']);?>			  </td>
			</tr>
			<tr>
			  <td width="164" height="31"><label for="nama"> Biaya Kirim</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo format_rupiah($rows['biaya_kirim']);?>			  </td>
			</tr>
			<tr>
			  <td width="164" height="34"><label for="nama"> Harus Transfer</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo format_rupiah($rows['biaya']);?>			  </td>
			</tr> 
			<tr>
			  <td width="164" height="33"><label for="nama"> Tanggal Bayar</label></td>
				<td width="6">:</td>
				<td width="350"> <?php echo $rows['tanggal_bayar'];?>			  </td>
			</tr>
			<tr>
			  <td width="164" height="27"><label for="nama"> Total Bayar</label></td>
				<td width="6">:</td>
				<td width="350"> <?php echo format_rupiah($rows['total_pembayaran']);?>			  </td>
			</tr>
			<tr>
			  <td width="164" height="19"><label for="nama"> Keterangan</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $ket;?>			  </td>
	  </tr>
			<tr>
			  <td height="19" colspan="3">&nbsp;</td>
    </tr>
			<tr>
			  <td height="19" colspan="3">Alamat Pengiriman </td>
    </tr>
	<tr>
			  <td width="164" height="19"><label for="nama"> Nama</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['nama'];?>			  </td>
    </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> No. Telp</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['no_telp'];?>			  </td>
	  </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> Kabupaten</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['nama_kab'];?>			  </td>
	  </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> Kecamatan</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['nama_kec'];?>			  </td>
	  </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> Kelurahan</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['nama_kel'];?>			  </td>
	  </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> Alamat Lengkap</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['alamat'];?>			  </td>
	  </tr>
	  <tr>
			  <td width="164" height="19"><label for="nama"> Kode Pos</label></td>
				<td width="6">:</td>
				<td width="350"> <?php  echo $rows['kd_pos'];?>			  </td>
	  </tr>
</table>
 
<p>&nbsp;</p>
 
 
<table width="100%" border="0">
  <tr>
    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp; <div align="center"></div></td>
    <td width="152">&nbsp;</td>
    <td width="48">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="34">&nbsp;</td>
    <td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;
        <div align="center">Tegal, <?php echo date("d M Y"); ?> </div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">Tanda Terima, </div>      <div align="center"></div>      <div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">Hormat Kami, </div>      <div align="center"></div>      <div align="center"></div></td>
    </tr>
  <tr>
    <td width="143"><div align="center"></div></td>
    <td width="143"><div align="center"></div></td>
    <td width="25"><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td width="83"><div align="center"></div></td>
    <td width="83"><div align="center"></div></td>
    <td width="93"><div align="center"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center"><strong><?php  echo $rows['nama'];?></strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong><?php echo $rowss['nama_pemilik'];?></strong></div></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">Customer</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center">Owner</div></td>
  </tr>
</table>
<p>&nbsp;</p> 
	</div>
	</body>
	 <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
 	
	<!-- Script to validasi -->
		<script src="../../js/valid/jquery.js"></script>
</html>