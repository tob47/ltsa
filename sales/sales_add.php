<?php
//prosess input
    if($_POST){
	$kode_kar = $_POST['kode_kar'];
	$depo = $_POST['depo'];
	$tgl_masuk = date("Y-m-d", strtotime($_POST['tgl_masuk'])); 
	$kode_jabatan = $_POST['kode_jabatan'];
	$nama_kar = $_POST['nama_kar'];
	$ayah = $_POST['ayah'];
	$nama_panggil = $_POST['nama_panggil'];
	$ibu = $_POST['ibu'];
	$sex = $_POST['sex'];
	$status = $_POST['status'];
	$kota_lahir = $_POST['kota_lahir'];
	$bojo = $_POST['bojo'];
	$tgl_lahir = date("Y-m-d", strtotime($_POST['tgl_lahir'])); 
	$jumlah_anak = $_POST['jumlah_anak']; 
	$agama = $_POST['agama']; 
	$kab =  $_POST['kab'];
	$alamat_asli =  $_POST['alamat_asli'];
	$kec =  $_POST['kec'];
	$kode_pos = $_POST['kode_pos'];
	$kel =  $_POST['kel'];
	$alamat_sekarang = $_POST['alamat_sekarang'];
	 
	$error = array();
         
	$cek = mysql_query("select kode_kar from karyawan where kode_kar='$kode_kar'");
	$masuk = mysql_num_rows($cek);
	if($masuk > 0){
		$error['kode_kar'] = '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				 Kode Karyawan sudah terdaftar, silahkan masukan kode Karyawan yang lain !
				</div>'; 
	}
	if(empty($error)){
           
		//prosess data
		// tambahkan kode simpan disini
		$sql = "INSERT INTO karyawan(kode_kar,depo,kode_jabatan,tgl_masuk,nama_kar,nama_panggil,sex,kota_lahir,tgl_lahir,ayah,ibu,status,bojo,jumlah_anak,agama,kab,kec,kel,alamat_asli,kode_pos,alamat_sekarang)
			VALUES('$kode_kar','$depo','$kode_jabatan','$tgl_masuk','$nama_kar','$nama_panggil','$sex','$kota_lahir','$tgl_lahir','$ayah','$ibu' ,'$status','$bojo','$jumlah_anak','$agama','$kab','$kec','$kel','$alamat_asli','$kode_pos','$alamat_sekarang')";
		$result = mysql_query($sql) or die(mysql_error());
			 
			if ($result) {  
			echo "<script>window.location='?mod=karyawan&pg=karyawan_form_edit&id=".sha1($kode_kar)."'</script>"; 
			}
        }
    }
?> 
 <!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Input Data Sales <small></small></h1>
			</div> 
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT --> 
		<div class="container"> 
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="utama.php">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="?fo=sales&pg=sales_add">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					Input Data Sales
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
		</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container" align="center"> 
							<div class="tab-pane col-md-12" style="background-color:#c6f245" > 
										<!-- BEGIN FORM-->  
										<form name="form-name" align="center"  method="post" action="?mod=karyawan&pg=karyawan_form_add" class="form-horizontal">
											<div class="form-body" > 
												<h3 class="form-section">Form Input</h3> 
												<hr>
												<div class="row" >
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Nama Karyawan</label>
															<div class="col-md-6">
																<input type="text" class="form-control" name="nama_kar" id="nama_kar" autofocus required
																 value="<?php echo isset($_POST['nama_kar']) ? $_POST['nama_kar'] : '';?>"
																/>
																 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Ayah Kandung</label>
															<div class="col-md-6"> 
																 <input type="text" name="ayah" id="ayah" class="form-control" autofocus required
																  value="<?php echo isset($_POST['ayah']) ? $_POST['ayah'] : '';?>"
																 />
															</div>
														</div>
													</div>
													<!--/span-->
												</div> 
												<div class="row" >
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Nama Karyawan</label>
															<div class="col-md-6">
																<input type="text" class="form-control" name="nama_kar" id="nama_kar" autofocus required
																 value="<?php echo isset($_POST['nama_kar']) ? $_POST['nama_kar'] : '';?>"
																/>
																 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Ayah Kandung</label>
															<div class="col-md-6"> 
																 <input type="text" name="ayah" id="ayah" class="form-control" autofocus required
																  value="<?php echo isset($_POST['ayah']) ? $_POST['ayah'] : '';?>"
																 />
															</div>
														</div>
													</div>
													<!--/span-->
												</div> 
												<div class="row" >
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Nama Karyawan</label>
															<div class="col-md-6">
																<input type="text" class="form-control" name="nama_kar" id="nama_kar" autofocus required
																 value="<?php echo isset($_POST['nama_kar']) ? $_POST['nama_kar'] : '';?>"
																/>
																 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-5">Ayah Kandung</label>
															<div class="col-md-6"> 
																 <input type="text" name="ayah" id="ayah" class="form-control" autofocus required
																  value="<?php echo isset($_POST['ayah']) ? $_POST['ayah'] : '';?>"
																 />
															</div>
														</div>
													</div>
													<!--/span-->
												</div> 
											</div>
										</form>
										<!-- END FORM-->  
							</div>
							<p>.</p>
<h3 class="form-section">Data Sales</h3>  
<table class="table table-bordered table-striped">  
	<tr>
		<td>Kode Pengelola</td>
		<td>Username</td>
		<td>Password</td>
		<td>Level</td>
		<td> Tolls</td>
	</tr>
	<?php
/*
 * kode untuk menghapus data
 */
if(isset($_GET['del'])){
	$kode_pengelola=$_GET['id'];
	$hapus ="delete from pengelola where kode_pengelola='$kode_pengelola'";
	mysql_query($hapus)or die(mysql_error());
}
  
$sql="SELECT * FROM  pengelola"; 
$result=mysql_query($sql) or die(mysql_error());

$no=1;
//proses menampilkan data 
while($rows=mysql_fetch_array($result)){
?>
	<tr>
	<td><?php  echo $no;?></td>
	<td><?php  echo $rows['username'];?></td>
	<td><?php  echo $rows['password'];?></td> 
	<td><?php  echo $rows['level'];?></td>
		
	<td><a href="?fo=tampil&pg=pengelola_form_edit&id=<?php echo $rows['kode_pengelola']?>"> 
	Edit</a> |
	<a href="?fo=tampil&pg=admin&del=true&id=<?php echo $rows['kode_pengelola']?>"  onClick="return confirm('Apakah anda yakin untuk menghapus semua data ?')">
	Hapus</a>
	</td>
	</tr>
	<?php
	$no++;
	}

	//tutup koneksi
	?> 
</table>
<?php
		if (isset($_GET['status'])) {
			if ($_GET['status'] == 0) {
				echo " <div style='color:blue'>Operasi data berhasil</div>";
			} else {
				echo "Operasi gagal";
			}
		}

mysql_close();
//close database 
?> 
						</div>
						
					</div>
					