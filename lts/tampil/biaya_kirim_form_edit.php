<h2> <i class="fa fa-edit"></i> Edit Biaya Kirim </h2>

<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from biaya_kirim where id_kota='$id' ";
$result = mysql_query($sql) or die(mysql_error());
?> 

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=biaya_edit">
<table class="table" >
<?php
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
		?>
		<tr>
		<td width="120">Kode Kota</td>
		<td width="350"><?php  echo $rows['id_kota'];?></td>
		</tr>
		<input type="hidden" id="id_kota" name="id_kota" value=<?php echo $rows['id_kota'];?> />
		<tr>
			<td width="120">Nama Kota</td>
			<td width="350">
			<input name="nama_kota" type="nama_kota" id="nama_kota"  class='required' minlength="2" maxlength="30" size="10" size="15"
			value=<?php echo $rows['nama_kota'];?>>
			</td>
		</tr>
		<tr>
			<td width="120">Biaya</td>
			<td width="350">
			<input name="biaya" type="biaya" id="biaya" size="10" class='required number' maxlength="10"
			value=<?php echo $rows['biaya'];?>>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
	
			<td>
			<input type="submit" name="submitUser" value="Submit" class="btn btn-primary" />
			<input type="reset" name="resetbtn" value="Reset" class="btn btn-info" />
			</td>
		</tr>
		<?php
		//loop while
		}
		?></table> 
	</form> 