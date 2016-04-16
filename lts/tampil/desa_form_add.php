<h2> <i class="fa fa-plus"></i> Tambah Desa</h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=desa_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Desa</td>
			<td width="350">
			<input name="id_kel" type="text" id="id_kel" readonly="true"
			value=<?php echo kode_kel();?> size="10" />
			</td>
		</tr>
		 <tr>
			<td width="120">Nama Desa</td>
			<td width="350">
			<input name="nama_kel" type="text" id="nama_kel" class='required' minlength="2" maxlength="30" size="20" />
			</td>
		</tr> 
		<tr>
			<td width="120">Nama Kecamatan</td>
			<td width="350">
			<select name='id_kec' id="id_kec" class='required'>
				<option value="">--Pilih Kecamatan--</option>
						<?php echo combo_kec();?>
				</select>
			</td>
		</tr> 
		 <tr>
			<td width="120">Biaya</td>
			<td width="350">
			<input name="biaya_kir" type="text" id="biaya_kir" class='required number' minlength="2" maxlength="30" size="20" />
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