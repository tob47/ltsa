<h2> <i class="fa fa-th-list"></i> Kategori </h2>
	<hr>
	<p>
	</p>
<?php
//include ('inc/config.php');
?>
<table class="table table-striped">
<a href="index.php?fo=tampil&pg=kategori_form_add" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah</a></a>
<p></p>
<tr >
<td>Kode</td><td>Nama kategori</td><td> Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
if(isset($_GET['del'])){
$kd_kategori=$_GET['id'];
$hapus ="delete from kategori where kd_kategori='$kd_kategori'";
mysql_query($hapus);
}
$sql="";
if(isset($_POST['btnCari'])){
$cari=$_POST['cari'];
//ambil data dari table admin
$sql="SELECT * FROM  kategori where kd_kategori like '%$cari%'";
}else{
$sql="SELECT * FROM  kategori";
}

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php  echo $rows['kd_kategori'];?></td>

<td><?php  echo $rows['nama_kategori'];?></td>



<td>
<a href="index.php?fo=tampil&pg=kategori_form_edit&id=<?php echo $rows['kd_kategori']?>">
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=kategori&del=true&id=<?php echo $rows['kd_kategori']?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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

