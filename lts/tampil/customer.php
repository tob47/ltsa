<h2> <i class="fa fa-users"></i> Customer</h2>
	<hr>
	<p>
	</p>
<?php
include('inc/config.php');

?>
<table class="table table-striped"> 
<tr>
<td>Kode Pesan</td><td>Kode</td><td>Nama</td><td>Alamat</td><td>Kode Pos</td><td>No Telp</td><td>Email</td>
<td>Kel</td>
<td>Kec</td>
<td>Kab</td>
<td>Tolls</td></tr>
 
<?php
/*
 * kode untuk menghapus data
 */
if(isset($_GET['del'])){
	$kd_pemesan=$_GET['id'];
	$hapus ="delete from customer where kd_pemesan='$kd_pemesan'";
	mysql_query($hapus);
} 
  
$sql="SELECT customer.*,pesan.*,kelurahan.*,kecamatan.*,kabupaten.* from customer,pesan,kelurahan,kecamatan,kabupaten where customer.kd_pesan=pesan.kd_pesan and customer.id_kel=kelurahan.id_kel and kelurahan.id_kec=kecamatan.id_kec 
	and kecamatan.kd_kab=kabupaten.kd_kab order by customer.kd_pesan asc";


$result=mysql_query($sql) or die(mysql_error());


//proses menampilkan data 
while($rows=mysql_fetch_array($result)){
?>
<tr>

<td><?php echo $rows['kd_pesan']; ?></td>

<td><?php echo $rows['kd_pemesan']; ?></td>

<td><?php echo $rows['nama']; ?></td>

<td><?php echo $rows['alamat']; ?></td>

<td><?php echo $rows['kd_pos']; ?></td>

<td><?php echo $rows['no_telp']; ?></td>

<td><?php echo $rows['email']; ?></td>
 
<td><?php echo $rows['nama_kel']; ?></td>

<td><?php echo $rows['nama_kec']; ?></td>

<td><?php echo $rows['nama_kab']; ?></td>

<td>
 
<a href="index.php?fo=tampil&pg=customer&del=true&id=<?php echo $rows['kd_pemesan']?>" onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
<i class="fa fa-trash-o"></i></a>
</td>
</tr>

<?php
}

//tutup koneksi

?> 
</table>
 
<?php 
if(isset($_GET['status'])){
if($_GET['status']==0){
echo " Operasi data berhasil";
}else{
echo "Operasi gagal";
}
}
 
mysql_close(); //close database
 
?> 