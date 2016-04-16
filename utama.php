<?php 
error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
session_start(); 
if(!isset($_SESSION['login_hash'])){ 
	echo "<script>window.location='index.php'</script>"; 
	}
	require_once 'inc/config.php'; 
?>
<html lang="en"> 
<head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="shortcut icon" href="upload/LOGO TBS.png">
    <title> Admin LTS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet"> 
	 
</head>
<body>
<!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> 
			
                <a class="navbar-brand" href="utama.php" style="color:#FFF; text-decoration: none;">  <strong >LTS Apps</strong> </a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right"> 
                    <div class="navbar-brand" style="color:#FFF;"> <?php 
				echo "Selamat Datang Kembali ".$_SESSION['login_user'];
				?> </div>
				 <?php
						if($_SESSION['login_hash']=="super_admin")
						{
						?>
				<div class="navbar-brand" > 
				<a href="?fo=tampil&pg=gp" style="color:#FFF; text-decoration: none;" > </i>|  Ganti Pass</a> 
				</div>
				<div class="navbar-brand" > 
				<a href="?fo=tampil&pg=admin" style="color:#FFF; text-decoration: none;" > </i>|  Data Pengelola</a>
				</div>
				<div class="navbar-brand" > 
				<a href="?fo=tampil&pg=about" style="color:#FFF; text-decoration: none;" > </i>|  About</a>
				</div>
				<div class="navbar-brand" > 
				<a href="logout.php" style="color:#FFF; text-decoration: none;" > </i>|  Logout |</a> 
				</div>
				<?php
						}elseif($_SESSION['login_hash']=="admin"){
						?>
				<div class="navbar-brand" > 
				<a href="?fo=tampil&pg=gp" style="color:#FFF; text-decoration: none;" > </i>|  Ganti Pass</a> 
				</div>
				<div class="navbar-brand" > 
				<a href="?fo=tampil&pg=about" style="color:#FFF; text-decoration: none;" > </i>|  About</a>
				</div>
				<div class="navbar-brand" > 
				<a href="logout.php" style="color:#FFF; text-decoration: none;" > </i>|  Logout</a> 
				</div>
				<?php
						}
						?>
        </div>
		 
    </nav>
<!-- Page Content -->
<div class="container">  
        <div class="row">
           <?php  
		   //tampilan halaman 
			$pg = '';
			/*
			 * PHP Code untuk mendapatkan halaman view masing masing tabel
			 */

			if(!isset($_GET['pg'])) {
					include ('tampil/home.php');
				} else {
					$mod=$_GET['fo'];
				$pg = $_GET['pg'];

				include  $mod."/". $pg . ".php"; 
			}
			?>
        </div>
        <!-- /.row -->
</div>
 <!-- /.container -->   
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
 	
	<!-- Script to validasi -->
		<script src="js/valid/jquery.js"></script>
		<script type="text/javascript" src="js/valid/jquery.validate.js"></script>
		<script type="text/javascript" src="js/valid/messages_id.js"></script>
	<style type="text/css">
    label.error {
        color: red;
        padding-left: .5em;
    }
    </style>
	<script>
			$(document).ready(function() {
				$("#form1").validate();
				$("#form2").validate();
			});
		</script>

</body>
</html>