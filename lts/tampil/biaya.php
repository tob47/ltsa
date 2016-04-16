<h2> <i class="fa fa-fighter-jet"></i> Biaya Perkota</h2>
	<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
?>
<table class="table table-striped"> 
<a href="index.php?fo=tampil&pg=biaya_kirim_form_add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a></a>
<p></p>
<tr>
<td>Kode</td><td>Nama kota</td><td>Biaya</td><td>Tools</td></tr>

<?php
/*
* kode untuk menghapus data
*/
 
//===========================
if(isset($_GET['del'])){
$id_kota=$_GET['id'];
$hapus ="delete from biaya_kirim where id_kota='$id_kota'";
mysql_query($hapus);
}
$sql="";
if(isset($_POST['btnCari'])){
$cari=$_POST['cari'];
//ambil data dari table admin
$sql="SELECT * FROM  biaya_kirim where id_kota like '%$cari%'";
}else{
$sql="SELECT * FROM  biaya_kirim ";
}

$result=mysql_query($sql) or die(mysql_error());
$no=1;
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php echo $rows['id_kota'];?></td>

<td><?php echo $rows['nama_kota'];?></td>

<td><?php echo format_rupiah($rows['biaya']);?></td>

<td>
<a href="index.php?fo=tampil&pg=biaya_kirim_form_edit&id=<?php echo $rows['id_kota']?>">
<i class="fa fa-edit"></i></a> |
<a href="index.php?fo=tampil&pg=biaya&del=true&id=<?php echo $rows['id_kota']?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
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

