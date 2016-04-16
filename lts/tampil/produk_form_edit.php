<h2> <i class="fa fa-edit"></i> Edit Produk </h2>
<?php
include ('inc/config.php');
$id = $_GET['id'];
//ambil data dari table feedback
$sql = "select * from produk where kd_produk='$id' ";
$result = mysql_query($sql) or die(mysql_error());
$rows = mysql_fetch_array($result);
?>
  
<form id="form1" name="form1"  method="post" action="?fo=tampil&pg=produk_edit">
	  	<table class="table">
		<tr>
			<td width="120">Kode Produk</td>
			<td width="350">
			<input name="kd_produk" type="text" readonly="true" id="kd_produk" size="10"
			value='<?php echo $rows['kd_produk'];?>' 
			/>
			</td>
		</tr>
		<tr>
			<td width="120">Nama</td>
			<td width="350">
			<input name="nama_produk" type="text" id="nama_produk"  size="20" class='required' minlength="2" maxlength="30" 
			value='<?php echo $rows['nama_produk'];?>'
			/>
			</td>
		</tr>
			<tr>
			<td width="120">Harga</td>
			<td width="350">
			<input name="harga" type="text" id="harga" size="20" class="required number"  maxlength="30" 
			value='<?php echo $rows['harga'];?>'
			/>
			</td>
		</tr>
		
		<tr>
			<td width="120">Kode Kategori</td>
			
			<td>
				<select name='kd_kategori' id="kd_kategori" class='required'>
				<option value="">--Pilih Kategori--</option>
						<?php echo combo_kategori();?>
				</select>
		
			</td>
		 
		</tr>
		
		<tr>
			<td width="120">Deskripsi</td>
			<td width="350">
			<textarea name='deskripsi' cols='30' class='required' rows='3' value=<?php echo "<textarea name=deskripsi>".$rows['deskripsi'];?>  </textarea>
			</td>
			</tr> 
	
		<tr>
			<td>&nbsp;</td>

			<td>
			<input type="submit" name="edit" value="Edit" class="btn btn-primary" />
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