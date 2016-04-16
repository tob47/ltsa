<h2><i class="fa fa-info-circle"></i> Profile</h2>
	<hr>
	<p> </p>
	<?php
	
$sql="SELECT * FROM  profil";

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
while($rows=mysql_fetch_array($result)){
?>

<form id="form1" name="form1" method="post" action="index.php?fo=tampil&pg=profil_edit">
<table width="463" height="430" > 
			<tr>
			  <td width="185" height="41"><label  for="nama">Nama</label></td>
				<td width="404">
			  <input name="nama" type="text" id="nama" value='<?php echo $rows['nama'];?>' class='required form-control' minlength="2" maxlength="30"
				/>			  </td>
			</tr>
			<tr>
			  <td width="185" height="41"><label for="nama">Nama Pemilik</label></td>
				<td width="404">
			  <input name="nama_pemilik" type="text" id="nama_pemilik" value='<?php echo $rows['nama_pemilik'];?>' class='required form-control' minlength="2" maxlength="30"
				/>			  
				</td>
			</tr>
			<tr>
			  <td width="185" height="40"><label  for="alamat">Alamat Lengkap</label></td>
				<td width="404">
			  <textarea name="alamat" id="alamat" class="required form-control">
			  <?php echo $rows['alamat'];?>
				</textarea></td>
			</tr>
			<tr>
			  <td width="185" height="35"><label  for="telp">No. Telp</label></td>
				<td width="404">
			  <input name="telp" type="text" id="telp" value='<?php echo $rows['telp'];?>' class="required number form-control" minlength="12" maxlength="15" />			  </td>
			</tr>
			<tr>
			  <td width="185" height="36"><label for="email">Email </label></td>
				<td width="404">
			  <input name="email" type="text" id="email" value='<?php echo $rows['email'];?>' class="email required form-control" />			  </td>
			</tr> 
			<tr>
			  <td width="185" height="41"><label  for="an_bank">a.n Nama Bank</label></td>
				<td width="404">
			  <input name="an_bank" type="text" id="an_bank" value='<?php echo $rows['an_bank'];?>' class='required form-control' minlength="2" maxlength="30"
				/>			  </td>
			</tr>
			<tr>
			  <td width="185" height="41"><label   for="nama_bank">Nama Bank</label></td>
				<td width="404">
			  <input name="nama_bank" type="text" id="nama_bank" value='<?php echo $rows['nama_bank'];?>' class='required form-control' minlength="2" maxlength="30"
				/>			  </td>
			</tr>
			<tr>
			  <td width="185" height="41"><label   for="rekening">Rekening</label></td>
				<td width="404">
			  <input name="rekening" type="text" id="rekening" value='<?php echo $rows['rekening'];?>' class="required number form-control" minlength="9" maxlength="20" />			  </td>
			</tr> 
			<tr>
			  <td width="185" height="46"><label  for="tentang">Tentang</label></td>
				<td width="404">
			  <textarea name="tentang" id="tentang" class="required form-control">
			   <?php echo $rows['tentang'];?>
				</textarea></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			
				<td>
				<input type="submit" name="submitUser" value="Edit" class="btn btn-info" /> 
			</tr> 
</table>
<?php
}

//tutup koneksi
?> 
</form> 
<?php
if (isset($_GET['status'])) {
	if ($_GET['status'] == 0) {
		echo " Operasi data berhasil";
	} else {
		echo "Operasi gagal";
	}
}

mysql_close();
//close database
 
?>