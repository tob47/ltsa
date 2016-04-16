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
					<a href="?fo=tampil&pg=backup">Pages</a>
					<i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Backup
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
	</div>
<form action="" method="post" name="postform">
.
	<div align="center">
	  <p> <span class="style3">Halaman untuk <strong><a href="?fo=tampil&pg=backup" class="btn btn-primary btn-lg"> Backup</a></strong> dan <strong><a href="?fo=tampil&pg=recovery_data" class="btn btn-primary btn-lg">Restore</a></strong> </span></p><p><span class="style3">Semua data yang ada didalam DATA SJ</span> </p>
	  <p><HR></p><p><span class="style3"> <h2>Proses Backup Data SJ</h2></span></p>
	   <p> <input type="submit" name="backup"  onClick="return confirm('Apakah Anda yakin akan backup database <?php echo "$dabname" ; ?>?')" value="Proses Backup" class="btn btn-primary btn-lg" />
	  </p>
  </div>
</form>
</p>
<?php
 error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
if(isset($_POST['backup'])){

	//membuat nama file
	$file=date("DdMY").'db_lts'.time().'.sql';
	
	//panggil fungsi dengan memberi parameter untuk koneksi dan nama file untuk backup
	backup_tables("localhost","root","","db_lts",$file);
	
	?>
	<p align="center">&nbsp;</p>
	<p align="center"> <span class="style3">Backup database telah selesai.. Silahkan cek di folder C:\xampp\htdocs\ltsa\backup </span>
</p>
	<?php
}else{
	unset($_POST['backup']);
}

/*
untuk memanggil nama fungsi :: jika anda ingin membackup semua tabel yang ada didalam database, biarkan tanda BINTANG (*) pada variabel $tables = '*'
jika hanya tabel-table tertentu, masukan nama table dipisahkan dengan tanda KOMA (,) 
*/
function backup_tables($host,$user,$pass,$name,$nama_file,$tables = '*')
{
	
	//untuk koneksi database
	$host	 = "localhost";
	$user	 = "root";
	$pass	 = "";
	$name 	= "db_lts";
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	if($tables == '*')
	{
		$tables = array();
		$result = mysql_query('SHOW TABLES');
		while($row = mysql_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}else{
		//jika hanya table-table tertentu
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}
	
	//looping dulu ah
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);
		
		//menyisipkan query drop table untuk nanti hapus table yang lama
		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";
		
		for ($i = 0; $i < $num_fields; $i++) 
		{
			while($row = mysql_fetch_row($result))
			{
				//menyisipkan query Insert. untuk nanti memasukan data yang lama ketable yang baru dibuat. so toy mode : ON
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++) 
				{
					//akan menelusuri setiap baris query didalam
					$row[$j] = addslashes($row[$j]);
					$row[$j] = @ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}
	
	//simpan file di folder yang anda tentukan sendiri. kalo saya sech folder "DATA"
	$nama_file;
	
	$handle = fopen('./backup/'.$nama_file,'w+');
	fwrite($handle,$return);
	fclose($handle);
}
?>

</body> 

