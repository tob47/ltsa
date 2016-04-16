<h2> <i class="fa fa-fighter-jet"></i> Data Kota / Kabupaten</h2>
	<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<a href="index.php?fo=tampil&pg=kabupaten_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></a>
<p></p>
<tr>
<td>Kode</td><td>Nama Kabupaten</td><td>Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
 
//===========================
if(isset($_GET['del'])){
$id=$_GET['id'];
$hapus ="delete from kabupaten where kd_kab='$id'";
mysql_query($hapus);
} 
 
$sql="SELECT * FROM  kabupaten "; 

$result=mysql_query($sql) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php echo $rows['kd_kab'];?></td>

<td><?php echo $rows['nama_kab'];?></td> 

<td>
<a href="index.php?fo=tampil&pg=kabupaten_form_edit&id=<?php echo $rows['kd_kab']?>">
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=kabupaten&del=true&id=<?php echo $rows['kd_kab']?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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
if(isset($_GET['status'])) {
	if($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "operasi gagal";
	}
}

mysql_close();
//close database
 
?>

