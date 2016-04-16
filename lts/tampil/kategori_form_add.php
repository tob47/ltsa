<h2> <i class="fa fa-plus"></i> Tambah Kategori </h2>
	<hr>
	<p>
	</p>

<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=kategori_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Kategori</td>
			<td width="350">
			<input name="kd_kategori" type="text" id="kd_kategori" readonly="true"
			value=<?php echo kode_kategori();?> size="10" />
			</td>
		</tr>
		<tr>
			<td width="120">Nama Kategori</td>
			<td width="350">
			<input name="nama_kategori" type="text" id="nama_kategori" size="40" class='required' minlength="2" maxlength="15" />
			</td>
		</tr>
	
		<tr>
			<td>&nbsp;</td>
			
			<td>
			<input type="submit" name="tambah" value="Tambah" class="btn btn-primary" />
			<input type="reset" name="resetbtn" value="Reset" class="btn btn-danger"/>
			</td>
		</tr> 
	</table> 
</form> 