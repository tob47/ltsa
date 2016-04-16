<h2> <i class="fa fa-plus"></i> Tambah Biaya Kirim </h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=biaya_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Kota</td>
			<td width="350">
			<input name="id_kota" type="text" id="id_kota" readonly="true"
			value=<?php echo kode_biaya();?> size="10" />
			</td>
		</tr>
		<tr>
			<td width="120">Nama Kota</td>
			<td width="350">
			<input name="nama_kota" type="text" id="nama_kota" class='required' minlength="2" maxlength="30" size="20" />
			</td>
		</tr>
		<tr>
			<td width="120">Biaya</td>
			<td width="350">
			<input name="biaya" type="text" id="biaya" size="20" class='required number' maxlength="10" />
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
	
			<td>
			<input type="submit" name="tambah" value="Tambah" class="btn btn-primary" />
			<input type="reset" name="resetbtn" value="Reset" class="btn btn-danger" />
			</td>
		</tr> 
	</table> 
</form> 