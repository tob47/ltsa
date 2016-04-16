<?php 
$sql="SELECT * FROM  profil";

$result=mysql_query($sql) or die(mysql_error());

//proses menampilkan data
$rows=mysql_fetch_array($result);
?>
<h2><i class="fa fa-home"></i> Home</h2>
<hr> 
 <!-- Main jumbotron for a primary marketing message or call to action -->
                <div class="jumbotron">
                    <h1>Hello, Administrator!</h1>
                    <p>Halaman untuk mengelola E-Commerce <?php echo $rows['nama'];?></p>   
					<p><a href="index.php?fo=tampil&pg=produk" class="btn btn-primary btn-lg" role="button">Mulai &raquo;</a>
                    </p>
                </div>