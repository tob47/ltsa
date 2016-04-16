<h2> <i class="fa fa-plus"></i> Tambah Kota / Kabupaten</h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=kabupaten_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Kota/Kabupaten</td>
			<td width="350">
			<input name="kd_kab" type="text" id="kd_kab" readonly="true"
			value=<?php echo kode_kab();?> size="10" />
			</td>
		</tr>
		<tr>
			<td width="120">Nama Kota / Kabupaten</td>
			<td width="350">
			<input name="nama_kab" type="text" id="nama_kab" class='required' minlength="2" maxlength="30" size="20" />
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