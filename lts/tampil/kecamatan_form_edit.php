<h2> <i class="fa fa-edit"></i> Edit Kecamatan</h2>

<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from kecamatan where id_kec='$id' ";
$result = mysql_query($sql) or die(mysql_error());
?> 

<form id="form1" name="form1" method="post" action="index.php?fo=tampil&pg=kecamatan_edit">
<table class="table" >
<?php
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
		?>
		<tr>
		<td width="120">Kode Kecamatan</td>
		<td width="350"><?php  echo $rows['id_kec'];?></td>
		</tr>
		<input type="hidden" id="id_kec" name="id_kec" value=<?php echo $rows['id_kec'];?> />
		<tr>
			<td width="120">Nama Kecamatan</td>
			<td width="350">
			<input name="nama_kec" type="text" id="nama_kec" class='required' 
			value='<?php echo $rows['nama_kec'];?>' />
			</td>
		</tr>
		 <tr>
			<td width="120">Nama Kota / Kabupaten</td>
			<td width="350"> 
			<?php $kab=$rows['kd_kab'];
			?>
			<?php $sqll = "select * from kabupaten where kd_kab='$kab' ";
			$resultt = mysql_query($sqll) or die(mysql_error());
			$rowss=mysql_fetch_array($resultt);
			?>
			<select name='kd_kab' id="kd_kab" class='required'>
			<option value="<?php echo $rowss['kd_kab'];?>">
			<?php echo $rowss['nama_kab'];?></option>   
						<?php echo combo_kab();?>
				</select>
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