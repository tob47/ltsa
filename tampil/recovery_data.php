 <style type="text/css">
<!--
 
.style3 {color: #000000; font-size: 16px;}
.style4 {color: #0000FF; font-size: 16px;}
.style5 {color: #FF0000; font-size: 16px;
-->
</style>
 <!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Backup & Restore Data SJ <small></small></h1>
			</div> 
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
					<a href="?fo=tampil&pg=recovery_data">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Restore
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
	</div>
<form enctype="multipart/form-data" action="?fo=tampil&pg=recovery_data" method="post">
.
	<p align="center"><span class="style3">Halaman untuk <strong><a href="?fo=tampil&pg=backup" class="btn btn-primary btn-lg"> Backup</a></strong> dan <strong><a href="?fo=tampil&pg=recovery_data" class="btn btn-primary btn-lg"> Restore</a></strong> </span></p><p align="center"><span class="style3">Semua data yang ada didalam data SJ</p>
	<p>.<hr></p><span class="style3"> <h2 align="center">Proses Restore Data SJ</h2></span></p>
	   <p> 
	<div align="center">
	  <table align="center">
	    <tr><td><span class="style3">File Backup Database (*.sql) <input type="file" name="datafile" size="30" id="gambar" class="btn btn-primary btn-lg" /></td></tr>
	    <tr><td>
		<br>
		<input type="submit" onClick="return confirm('Apakah Anda yakin akan restore data SJ')" name="restore" value="Restore Database" class="btn btn-primary btn-lg" /></td>
	  </tr>
	    </table>
  </div>
</form>


<?php
error_reporting(E_ALL ^(E_NOTICE | E_WARNING));

if(isset($_POST['restore'])){
	$koneksi=mysql_connect("localhost","root","");
	mysql_select_db("db_lts",$koneksi);
	
	$file_type	= array('sql');
	$nama_file = $_FILES['datafile']['name'];
	$ukuran = $_FILES['datafile']['size'];
	$explode	= explode('.',$nama_file);
	$extensi	= $explode[count($explode)-1];
	
	//periksa jika data yang dimasukan belum lengkap
	if ($nama_file=="")
	{
		echo "<span class='style3'><center><p>.</p>Database yang anda upload masih kosong</center><p>.</p></span>";
	}
	elseif (!in_array($extensi,$file_type))
	{
		echo "<span class='style3'> <center><p>.</p>Type file yang anda upload bukan database MySql (.sql)</center></span>";
	}else{
		//definisikan variabel file dan alamat file
		$uploaddir='./backup/';
		$alamatfile=$uploaddir.$nama_file;

		//periksa jika proses upload berjalan sukses
		if (move_uploaded_file($_FILES['datafile']['tmp_name'],$alamatfile))
		{
			
			$filename = './backup/'.$nama_file.'';
			
			// Temporary variable, used to store current query
			$templine = '';
			// Read in entire file
			$lines = file($filename);
			// Loop through each line
			foreach ($lines as $line)
			{
				// Skip it if it's a comment
				if (substr($line, 0, 2) == '--' || $line == '')
					continue;
			 
				// Add this line to the current segment
				$templine .= $line;
				// If it has a semicolon at the end, it's the end of the query
				if (substr(trim($line), -1, 1) == ';')
				{
					// Perform the query
					mysql_query($templine) or print(' ');
					// Reset temp variable to empty
					$templine = '';
				}
			}
			echo "<center><span class='style3'><p></p>Berhasil Restore Database, silahkan di cek.</span></center>";
		
		}else{
			//jika gagal
			echo "<span class='style3'><p></p>Proses upload gagal, kode error = </span>" . $_FILES['location']['error'];
		}	
	}

}else{
	unset($_POST['restore']);
}
?>

</body> 

	