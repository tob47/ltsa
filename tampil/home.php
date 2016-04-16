 <!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Selamat Datang Di Aplikasi SJ Tagihan <small></small></h1>
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
					<a href="utama.php">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Halaman Utama
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
		</div>
	 <?php
		if (isset($_GET['status'])) {
			if ($_GET['status'] == 0) {
				echo '<div class="alert alert-success alert-dismissable">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				 Data Berhasil Di Update !!!
				</div>';
			} else {
				echo "Operasi gagal";
			}
		}

mysql_close();
//close database 
?> 

<div class="container">
	
	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12"> 
			 <a href="?fo=tampil&pg=backup" title="Klik Untuk Mendaftar">  
				<div class="well well-md" style="background-color:#FD375A;" >
				<center><h1 class="glyphicon glyphicon-book" style="color:#FFF;"><br>
				<font>Backup'SJ</font></h1><br>
				<font class="btn" style="color:#FFF; size:+1;">Backup Database SJ</font>
				</center>
				</div>
			</a>
	  </div> 
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        	<a href="update.php" title="Klik Untuk Mengupdate Data">  
				<div class="well well-md" style="background-color:#0AD866" >
				<center><h1 class="glyphicon glyphicon-search" style="color:#FFF;"><br>
				<font>Update'Data</font></h1><br>
				<font class="btn" style="color:#FFF; size:+1;">Mengupdate database yang baru</font>
				</center>
				</div>
        </a>
	  </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        	<a href="?fo=sales&pg=sales_add" title="Klik Untuk Pengelolaan Data Sales">  
				<div class="well well-md" style="background-color:#D713EC;" >
				<center><h1 class="glyphicon glyphicon-user" style="color:#FFF;"><br>
				<font>Data'Sales</font></h1><br>
				<font class="btn" style="color:#FFF; size:+1;">Pengelolaan Data Sales</font>
				</center>
				</div>
          </a>
		</div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        	<a href="?fo=sj&pg=sj_add" target="_parent" title="Klik Untuk Membuat Surat Jalan">  
				<div class="well well-md" style="background-color:#7b755c" >
				<center><h1 class="glyphicon glyphicon-bullhorn" style="color:#FFF;"><br>
				<font>Buat'SJ</font></h1><br>
				<font class="btn" style="color:#FFF; size:+1;">Buat Surat Jalan</font>
				</center>
				</div>
             </a> 
		</div><!--
		<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        	<a href="menu.php" target="_parent" title="Klik Untuk Restore Database">  
				<div class="well well-md" style="background-color: #99CC00" >
				<center><h1 class="glyphicon glyphicon-star" style="color:#FFF;"><br>
				<font>Restore'SJ</font></h1><br>
				<font class="btn" style="color:#FFF; size:+1;">Buat Surat Jalan</font>
				</center>
				</div>
             </a> 
		</div>-->
</div> 