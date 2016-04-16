<h2> <i class="fa fa-plus"></i> Tambah Kecamatan</h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=kecamatan_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Kecamatan</td>
			<td width="350">
			<input name="id_kec" type="text" id="id_kec" readonly="true"
			value=<?php echo kode_kec();?> size="10" />
			</td>
		</tr>
		 
		<tr>
			<td width="120">Nama Kecamatan</td>
			<td width="350">
			<input name="nama_kec" type="text" id="nama_kec" class='required' minlength="2" maxlength="30" size="20" />
			</td>
		</tr> 
		<tr>
			<td width="120">Nama Kota / Kabupaten</td>
			<td width="350"> 
			<select name='kd_kab' id="kd_kab" class='required'>
				<option value="">--Pilih Kabupaten--</option>
						<?php echo combo_kab();?>
				</select>
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