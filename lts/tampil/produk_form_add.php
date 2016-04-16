<h2> <i class="fa fa-plus"></i> Tambah Produk </h2>
	 
	<p>
	</p>
	<form id="form1" name="form1" method="post" enctype="multipart/form-data" action="index.php?fo=tampil&pg=produk_add">
	 
	<table class="table">
		<tr>
			<td width="120">Kode Produk</td>
			<td width="350">
			<input name="kd_produk" type="text" readonly="true" id="kd_produk" size="10" value=<?php echo kode_buku();?>  />
			</td>
		</tr>
		<tr>
			<td width="120">Nama</td>
			<td width="350">
			<input name="nama_produk" type="text" id="nama_produk" size="20" class='required' minlength="2" maxlength="30" />
			</td>
		</tr>
			<tr>
			<td width="120">Harga</td>
			<td width="350">
			<input name="harga" type="text" id="harga" size="20" class="required number"  maxlength="30" />
			</td>
		</tr> 
		<tr>
			<td width="120">Kode Kategori</td>
			<td width="350">
				<select name='kd_kategori' id="kd_kategori" class='required'>
				<option value="">--Pilih Kategori--</option>
						<?php echo combo_kategori();?>
				</select>
		
			</td>
		</tr>
				 
		<tr>
			<td width="120">Gambar</td>
			<td width="350">
			<input name="upload" type="file" id="upload" size="40" class='required' />
			</td>
		</tr>
		<tr>
			<td width="120">Deskripsi</td>
			<td width="350">
			<textarea name='deskripsi' cols='30' rows='3'  class='required' ></textarea>
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
<?php
// KODE UNTUK MENAMPILKAN PESAN STATUS
if(isset($_GET['status'])) {
	$status=$_GET['status'];
	switch($status) {
		case 0 :
			echo " operasi data sukses!";
			break;
		case 1 :
			echo " Anda belum memilih file yang akan diupload!";
			break;
		case 2 :
			echo " upload gagal, Format yang diperbolehkan hanya jpg,png dan gif!";
			break;
		case 3 :
			echo " upload gagal, Ukuran file terlalu besar!";
			break;
	}
}
?>
