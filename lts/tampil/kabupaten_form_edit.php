<h2> <i class="fa fa-edit"></i> Edit Kota / Kabupaten </h2>

<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from kabupaten where kd_kab='$id' ";
$result = mysql_query($sql) or die(mysql_error());
?> 

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=kabupaten_edit">
<table class="table" >
<?php
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
		?>
		<tr>
		<td width="120">Kode Kota / Kabupaten</td>
		<td width="350"><?php  echo $rows['kd_kab'];?></td>
		</tr>
		<input type="hidden" id="kd_kab" name="kd_kab" value=<?php echo $rows['kd_kab'];?> />
		<tr>
			<td width="120">Nama Kota / Kabupaten</td>
			<td width="350">
			<input name="nama_kab" type="text" id="nama_kab"  class='required' minlength="2" maxlength="30" size="10" size="15"
			value=<?php echo $rows['nama_kab'];?>>
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