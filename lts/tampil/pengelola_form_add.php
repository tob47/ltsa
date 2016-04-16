<h2> <i class="fa fa-plus"></i> Tambah Pengelola </h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post"  enctype="multipart/form-data" action="index.php?fo=tampil&pg=pengelola_add">
	 
	<table class="table">
	<tr>
			<td width="120">Kode Pengelola</td>
			<td width="350">
			<input name="kode_pengelola" type="text" id="kode_pengelola" readonly="true"
			value=<?php echo kode_pengelola();?> size="10" />
			</td>
		</tr>
		<tr>
			<td width="120">Username</td>
			<td width="350">
			<input name="username" type="text" id="username" class='required' minlength="2" maxlength="30" size="20" />
			</td>
		</tr>
		<tr>
			<td width="120">Password</td>
			<td width="350">
			<input name="password" type="password" id="password" class='required' minlength="2" maxlength="8" size="20" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		
			<td>
			<input type="submit" name="tambahPengelola" value="Tambah" class="btn btn-primary" />
			<input type="reset" name="resetbtn" value="Reset" class="btn btn-danger" />
			</td>
		</tr> 
	</table> 
</form> 
