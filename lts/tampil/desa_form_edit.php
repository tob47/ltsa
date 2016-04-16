<h2> <i class="fa fa-edit"></i> Edit Desa</h2>

<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from kelurahan where id_kel='$id' ";
$result = mysql_query($sql) or die(mysql_error());
?> 

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=desa_edit">
<table class="table" >
<?php
//proses menampilkan data
while($rows=mysql_fetch_array($result)){
		?>
		<tr>
		<td width="120">Kode Desa</td>
		<td width="350"><?php  echo $rows['id_kel'];?></td>
		</tr>
		<input type="hidden" id="id_kel" name="id_kel" value=<?php echo $rows['id_kel'];?> />
		<tr>
			<td width="120">Nama Desa</td>
			<td width="350">
			<input name="nama_kel" type="text" id="nama_kel"  class='required' minlength="2" maxlength="30" 
			value='<?php echo $rows['nama_kel'];?>' />
			</td>
		</tr>
		 <tr>
			<td width="120">Nama Kecamatan</td>
			<td width="350"> <?php 
			$kec=$rows['id_kec'];
			?>
			<?php $sqll = "select * from kecamatan where id_kec='$kec' ";
			$resultt = mysql_query($sqll) or die(mysql_error());
			$rowss=mysql_fetch_array($resultt);
			?>
			<select name='id_kec' id="id_kec" class='required'>
			<option value="<?php echo $rowss['id_kec'];?>">
			<?php echo $rowss['nama_kec'];?></option>  
				<option value="">--Pilih Kecamatan--</option>
						<?php echo combo_kec();?>
				</select>
			</td>
		</tr> 
		<tr>
			<td width="120">Biaya</td>
			<td width="350">
			<input name="biaya_kir" type="text" id="biaya_kir"  class='required number' minlength="2" maxlength="30" size="10" size="15"
			value=<?php echo $rows['biaya_kir'];?>>
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