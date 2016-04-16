<h2> <i class="fa fa-fighter-jet"></i> Biaya Kirim Barang PerDesa</h2>
	<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<a href="index.php?fo=tampil&pg=desa_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></a>
<p></p>
<tr>
<td>Kode</td><td>Nama Desa</td><td>Nama Kecamatan</td><td>Nama Kabupaten</td><td>Biaya</td><td>Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
 
//===========================
if(isset($_GET['del'])){
$id=$_GET['id'];
$hapus ="delete from kelurahan where id_kel='$id'";
mysql_query($hapus);
} 
 
$sql="SELECT kelurahan.*,kecamatan.*,kabupaten.* from kelurahan,kecamatan,kabupaten where kelurahan.id_kec=kecamatan.id_kec 
	and kecamatan.kd_kab=kabupaten.kd_kab order by kelurahan.id_kel asc";

$result=mysql_query($sql) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php echo $rows['id_kel'];?></td>

<td><?php echo $rows['nama_kel'];?></td>

<td><?php echo $rows['nama_kec'] ;?></td>
<td><?php echo $rows['nama_kab'] ;?></td>

<td><?php echo format_rupiah($rows['biaya_kir']) ;?> </td>

<td>
<a href="index.php?fo=tampil&pg=desa_form_edit&id=<?php echo $rows['id_kel']?>">
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=desa&del=true&id=<?php echo $rows['id_kel']?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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

