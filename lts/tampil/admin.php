<h2> <i class="fa fa-user"></i> Administrator</h2>
	<hr>
	<p>
	</p>
<?php

include ('inc/config.php');

?> 
<!--<form action='index.php?page=pengelola_view'method="post">
	<input type='text' name='cari' value=''>
	<input type='submit' name='btnCari' value='cari'>
	
</form> -->
<table class="table table-striped"> 
<a href="index.php?fo=tampil&pg=pengelola_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
<p></p>
	<tr>
		<td>Kode Pengelola</td>
		<td>Username</td>
		<td>Password</td>
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

$sql="";
if(isset($_POST['btnCari'])){
$cari=$_POST['cari'];
//ambil data dari table admin
$sql="SELECT * FROM  pengelola where username like '%$cari%'";
}else{
$sql="SELECT * FROM  pengelola";
}

$result=mysql_query($sql) or die(mysql_error());

$no=1;
//proses menampilkan data 
while($rows=mysql_fetch_array($result)){
?>
	<tr>
	<td><?php  echo $rows['kode_pengelola'];?></td>
	<td><?php  echo $rows['username'];?></td>
	<td><?php  echo $rows['password'];?></td>
		
	<td><a href="index.php?fo=tampil&pg=pengelola_form_edit&id=<?php echo $rows['kode_pengelola']?>"> 
	<i class="fa fa-edit"></i></a> |
	<a href="index.php?fo=tampil&pg=admin&del=true&id=<?php echo $rows['kode_pengelola']?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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
				echo " <div style='color:blue'>Operasi data berhasil</div>";
			} else {
				echo "Operasi gagal";
			}
		}

mysql_close();
//close database 
?> 