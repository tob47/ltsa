<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Ganti Password </h1>
			</div>
			<!-- END PAGE TITLE --> 
		</div>
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container"> 
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb">
				<li>
					<a href="utama.php">Home</a><i class="fa fa-circle"></i>
				</li>
				<li>
					<a href="?fo=tampil&pg=gp">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Ganti Password /<?php echo "  Username ".$_SESSION['login_user'];?>
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="portlet light">
				<div class="portlet-body"> 
					<!-- Meer Our Team -->
					<div class="headline">
						<h3>Form Ganti Password</h3>
					</div>
					 <form method="POST" action="?fo=tampil&pg=gp_action">
				
				<fieldset> 
			 		<input type='hidden' name='username' value='<?php echo $_SESSION['login_user']?>'>
					 
						<label for="input">Password Baru </label>
						<div class="input">
						<div class="col-md-4"> 
					  	<input minlength="2" maxlength="6"  class="form-control" name="password" type="password" autofocus>
					 	 </div>
						 </div>
					</div> 
						<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit"  name="aksi" class="btn btn-primary" value='ubah'> 
				</fieldset>
			</form>
			<?php
				// KODE UNTUK MENAMPILKAN PESAN STATUS 
				if (isset($_GET['status'])) {
					if ($_GET['status'] == 0) {
						echo " <p class='text-success'>Ganti password berhasil</p>";
					} else {
						echo "<p class='text-error'>Ganti password gagal</p>";
					}
				}
					?> 
				</div>
			</div>
			<!-- END PAGE CONTENT INNER -->
		</div>
	</div>
	<!-- END PAGE CONTENT -->