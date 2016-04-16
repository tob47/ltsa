<h2> <i class="fa fa-fighter-jet"></i> Data Kecamatan</h2>
	<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<a href="index.php?fo=tampil&pg=kecamatan_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></a>
<p></p>
<tr>
<td>Kode</td><td>Nama Kecamatan</td><td>Nama Kabupaten</td><td>Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
 
//===========================
if(isset($_GET['del'])){
$id=$_GET['id'];
$hapus ="delete from kecamatan where id_kec='$id'";
mysql_query($hapus);
} 
 
$sql="SELECT kecamatan.*,kabupaten.* from kecamatan,kabupaten where kecamatan.kd_kab=kabupaten.kd_kab order by id_kec asc";

$result=mysql_query($sql) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php echo $rows['id_kec'];?></td>

<td><?php echo $rows['nama_kec'];?></td>

<td><?php echo $rows['nama_kab'] ;?></td>

<td>
<a href="index.php?fo=tampil&pg=kecamatan_form_edit&id=<?php echo $rows['id_kec']?>">
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=kecamatan&del=true&id=<?php echo $rows['id_kec']?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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

