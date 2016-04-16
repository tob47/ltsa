<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Data Pengelola <small>admin</small></h1>
			</div> 
		</div>
	</div>
	<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="utama.php">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="?fo=tampil&pg=admin">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Admin
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
<?php

include ('inc/config.php');

?>   
<table class="table table-bordered table-striped"> 
<a href="?fo=tampil&pg=pengelola_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
<p></p>
	<tr>
		<td>Kode Pengelola</td>
		<td>Username</td>
		<td>Password</td>
		<td>Level</td>
		<td> Tolls</td>
	</tr>
	<?php
/*
 * kode untuk menghapus data
 */
if(isset($_GET['del'])){
	$kode_pengelola=$_GET['id'];
	$hapus ="delete from pengelola where kode_pengelola='$kode_pengelola'";
	mysql_query($hapus)or die(mysql_error());
}
  
$sql="SELECT * FROM  pengelola"; 
$result=mysql_query($sql) or die(mysql_error());

$no=1;
//proses menampilkan data 
while($rows=mysql_fetch_array($result)){
?>
	<tr>
	<td><?php  echo $no;?></td>
	<td><?php  echo $rows['username'];?></td>
	<td><?php  echo $rows['password'];?></td> 
	<td><?php  echo $rows['level'];?></td>
		
	<td><a href="?fo=tampil&pg=pengelola_form_edit&id=<?php echo $rows['kode_pengelola']?>"> 
	Edit</a> |
	<a href="?fo=tampil&pg=admin&del=true&id=<?php echo $rows['kode_pengelola']?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
	Hapus</a>
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
				echo " <div style='color:blue'>Operasi data berhasil</div>";
			} else {
				echo "Operasi gagal";
			}
		}

mysql_close();
//close database 
?> 