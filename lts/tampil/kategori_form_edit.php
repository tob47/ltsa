<h2> <i class="fa fa-edit"></i> Edit Kategori </h2>
<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from kategori where kd_kategori='$id' ";
$result = mysql_query($sql) or die(mysql_error());
?> 

	<form id="form1" name="form1" method="post" action="index.php?fo=tampil&pg=kategori_edit">
	<table class="table">
		<?
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
		?>

		<td width="120">Kode Kategori</td>
		<td width="350">
		<input type="text" id="kd_kategori" name="kd_kategori" value=<?php echo $rows['kd_kategori'];?>  readonly />
		</td>
		</tr> <td width="120">Nama Kategori</td>
		<td width="350">
		<input name="nama_kategori" type="text" id="nama_kategori" size="20"
		value='<?php echo $rows['nama_kategori'];?>'>
		</td>
		</tr>
	
		<tr>
			<td>&nbsp;</td>
		
			<td>
			<input type="submit" name="submitUser" value="Edit" class="btn btn-info" /> 
			</td>
		</tr>
		<?php
		//loop while
		}
		?>
		 
		</table> 
	</form> 