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
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script> 
	<script type="text/javascript">
		$(function() {
					$('#tgl_masuk').datepicker({
					 }); 
					$('#tgl_lahir').datepicker({
					 }); 
					});
		
	</script>
<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Managed Karyawan <small>pengelolaan data karyawan</small></h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">
							<div class="tab-pane">
								<div class="portlet box green">
									<div class="portlet-title">
										<div class="caption">
											<i class="fa fa-gift"></i>Karyawan Form
										</div>
										<div class="tools">
											<a href="javascript:;" class="collapse">
											</a>
											 <a href="javascript:;" class="reload">
											</a>
											<a href="javascript:;" class="remove">
											</a>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form name="form-name"  method="post" action="?mod=karyawan&pg=karyawan_form_add" class="form-horizontal">
											<div class="form-body">
												<h3 class="form-section">Data Office</h3>
												 <?php echo isset($error['kode_kar']) ? $error['kode_kar'] : '';?>  
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kode Karyawan</label>
															<div class="col-md-9">
																<input type="text" name="kode_kar" id="kode_kar" class="form-control" readonly />
															</div>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															 
															<label class="control-label col-md-3">Depo</label>
															<div class="col-md-9">

																<select class="form-control" name="depo" id="depo" autofocus required>
										<option value="">- Pilih Depo -</option>	
										<option value="TEGAL"<?php if (isset($depo) AND $depo=="TEGAL") echo " selected";?>>TEGAL</option>
										<option value="PURWOKERTO"<?php if (isset($depo) AND $depo=="PURWOKERTO") echo " selected";?>>PURWOKERTO</option>
										<option value="PEKALONGAN"<?php if (isset($depo) AND $depo=="PEKALONGAN") echo " selected";?>>PEKALONGAN</option>
																</select>
															</div> 
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Masuk</label>
															<div class="col-md-9"> 
																<input type="text" name="tgl_masuk" class="form-control date date-picker" id="tgl_masuk" 
																 value="<?php echo isset($_POST['tgl_masuk']) ? $_POST['tgl_masuk'] : '';?>"
																/>
																 
															</div>
														</div>
													</div> 
													<div class="col-md-6">
														<div class="form-group">
														 
															<label class="control-label col-md-3">Jabatan</label>
															<div class="col-md-9"> 
									<select name="kode_jabatan" id="kode_jabatan"  class="form-control" autofocus required>
									<option value="">- Pilih Jabatan -</option>
   
									 
									<?php
									$q=mysql_query("select * from jabatan");
									while($data=mysql_fetch_array($q)){
									?>
									<option value="<?php echo $data["kode_jabatan"]?>"
									<?php if (isset($kode_jabatan) AND $kode_jabatan==$data["kode_jabatan"]) echo " selected";?>>
									<?php echo $data["nama_jabatan"] ?>
									</option>
									<?php
									}
									?>
									</select>
															</div>
														</div>
														
													</div>
												</div>
												
												<h3 class="form-section">Personal Info</h3>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nama Karyawan</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="nama_kar" id="nama_kar" autofocus required
																 value="<?php echo isset($_POST['nama_kar']) ? $_POST['nama_kar'] : '';?>"
																/>
																 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Ayah Kandung</label>
															<div class="col-md-9"> 
																 <input type="text" name="ayah" id="ayah" class="form-control" autofocus required
																  value="<?php echo isset($_POST['ayah']) ? $_POST['ayah'] : '';?>"
																 />
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nm. Pangilan</label>
															<div class="col-md-9">
															<input type="text" class="form-control" name="nama_panggil" id="nama_panggil"  autofocus required 
															 value="<?php echo isset($_POST['nama_panggil']) ? $_POST['nama_panggil'] : '';?>"
															/>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Ibu Kandung</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="ibu" id="ibu"  autofocus required
																 value="<?php echo isset($_POST['ibu']) ? $_POST['ibu'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Sex</label>
															<div class="col-md-9">
																<select class="form-control" name="sex" id="sex" autofocus required>
																<option value="">- Pilih Sex -</option>	
										<option value="Pria"<?php if (isset($sex) AND $sex=="Pria") echo " selected";?>>Pria</option>
										<option value="Wanita"<?php if (isset($sex) AND $sex=="Wanita") echo " selected";?>>Wanita</option>
									 
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Status</label>
															<div class="col-md-9">
										<select class="form-control" name="status" id="status" autofocus required>
										<option value="">- Pilih Status -</option>	
										<option value="Menikah"<?php if (isset($status) AND $status=="Menikah") echo " selected";?>>Menikah</option>
										<option value="Belum Nikah"<?php if (isset($status) AND $status=="Belum Nikah") echo " selected";?>>Belum Nikah</option>
										<option value="Single Parent"<?php if (isset($status) AND $status=="Single Parent") echo " selected";?>>Single Parent</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kota Lahir</label>
															<div class="col-md-9">
																<input type="text" name="kota_lahir" id="kota_lahir" class="form-control"   autofocus required
																 value="<?php echo isset($_POST['kota_lahir']) ? $_POST['kota_lahir'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Nm. Suami/Istri</label>
															<div class="col-md-9">
																<input type="text" name="bojo" id="bojo" class="form-control"  
																 value="<?php echo isset($_POST['bojo']) ? $_POST['bojo'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Tanggal Lahir</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" autofocus required
																 value="<?php echo isset($_POST['tgl_lahir']) ? $_POST['tgl_lahir'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
														<label class="control-label col-md-3">Jumlah Anak</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="jumlah_anak" id="jumlah_anak" pattern="[0-9]+" 
																 value="<?php echo isset($_POST['jumlah_anak']) ? $_POST['jumlah_anak'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Agama</label>
															<div class="col-md-9">
																<select class="form-control" name="agama" id="agama" autofocus required>
																<option value="">- Pilih Agama -</option>	
																<option value="ISLAM"<?php if (isset($agama) AND $agama=="ISLAM") echo " selected";?>>ISLAM</option>
																<option value="KATOLIK"<?php if (isset($agama) AND $agama=="KATOLIK") echo " selected";?>>KATOLIK</option> 
																<option value="KRISTEN"<?php if (isset($agama) AND $agama=="KRISTEN") echo " selected";?>>KRISTEN</option> 
																<option value="HINDU"<?php if (isset($agama) AND $agama=="HINDU") echo " selected";?>>HINDU</option> 
																<option value="KONGHUCHU"<?php if (isset($agama) AND $agama=="KONGHUCHU") echo " selected";?>>KONGHUCHU</option> 
																<option value="BUDHA"<?php if (isset($agama) AND $agama=="BUDHA") echo " selected";?>>BUDHA</option>
																</select>
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
														 
														</div>
													</div>
													<!--/span-->
												</div> 
												<h3 class="form-section">Alamat</h3>
												<!--/row-->
												 
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kab/Kota</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="kab" id="kab"  autofocus required
																 value="<?php echo isset($_POST['kab']) ? $_POST['kab'] : '';?>"
																/>
															</div> 
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alamat Asli</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="alamat_asli" id="alamat_asli" autofocus required
																 value="<?php echo isset($_POST['alamat_asli']) ? $_POST['alamat_asli'] : '';?>"
																/>
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kecamatan</label>
															<div class="col-md-9">
															<input type="text" class="form-control" name="kec" id="kec"  autofocus required
																 value="<?php echo isset($_POST['kec']) ? $_POST['kec'] : '';?>"
																/>
																 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kode Pos</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="kode_pos" id="kode_pos" pattern="[0-9]+"
																 value="<?php echo isset($_POST['kode_pos']) ? $_POST['kode_pos'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Kelurahan / Desa</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="kel" id="kel"  autofocus required
																 value="<?php echo isset($_POST['kel']) ? $_POST['kel'] : '';?>"
																/> 
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label col-md-3">Alamat Sekarang</label>
															<div class="col-md-9">
																<input type="text" class="form-control" name="alamat_sekarang" id="alamat_sekarang"
																 value="<?php echo isset($_POST['alamat_sekarang']) ? $_POST['alamat_sekarang'] : '';?>"
																/>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												
																								 
											</div>
											<div class="form-actions">
												<div class="row">
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-offset-3 col-md-9">
																<input type="submit" name="btn" class="btn green" value="Submit" />
																
															</div>
														</div>
													</div>
													<div class="col-md-6">
													</div>
												</div>
											</div>
										</form>
										<!-- END FORM-->
									</div>
								</div>
							</div>
						</div>
					</div>