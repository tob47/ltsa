<h2> <i class="fa fa-edit"></i> Edit Pengelola </h2>
<hr>
	<p>
	</p>
<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from pengelola where kode_pengelola='$id' ";
$result = mysql_query($sql) or die(mysql_error());
$rows = mysql_fetch_array($result);
?> 

	<form id="form1" name="form1" method="post" action="index.php?fo=tampil&pg=pengelola_edit">
	<table class="table"> 
		<tr>
		<td width="120">Kode Pengelola</td>
		<td width="350">
		<input type="text" id="kode_pengelola" name="kode_pengelola" value='<?php  echo $rows['kode_pengelola'];?>' /></td>
		</tr>
		<td width="120">Username</td>
		<td width="350"> 
		<input type="text" id="username" name="username" value='<?php echo $rows['username'];?>' /> </td>
		</tr>
		<tr>
			<td width="120">Password</td>
			<td width="350">
			<input name="password" type="password" id="password" size="20" minlength="2" maxlength="8"  />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		
			<td>
			<input type="submit" name="edit" value="Submit" class="btn btn-primary"/> 
			</td>
		</tr>
	</table> 
	</form>
