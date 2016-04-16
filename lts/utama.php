<?php 
error_reporting(E_ALL ^(E_NOTICE | E_WARNING));
session_start(); 
if(!isset($_SESSION['username'])){ 
	echo "<script>window.location='index.php'</script>"; 
	}
	require_once 'inc/config.php'; 
?>
<html lang="en"> 
<head>

    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  

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
			
                <a class="navbar-brand" href="utama.php"><i class="fa fa-briefcase"></i> LTS CV. TBS</a>
            </div>
			
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right"> 
                    <div class="navbar-brand">Selamat Datang Admin</div>
					<ul class="nav navbar-nav navbar-right"> 
					<li>
                        <a href="index.php?fo=tampil&pg=bayar_form_add" class="list-group-item"><i class="fa fa-money"></i> Data Pengelola</a>
                    </li>
					<li>
                        <a href="logout.php" class="list-group-item"><i class="fa fa-desktop"></i> Logout</a>
                    </li>
                </ul>
                </ul
            </div>
            <!-- /.navbar-collapse -->
        </div>
		 
    </nav>
<!-- Page Content -->
<div class="container">  
        <div class="row">
           <?php include ('tampil/home.php'); ?> 
        </div>
        <!-- /.row -->
</div>
 <!-- /.container --> 
	<!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
 	
	<!-- Script to validasi -->
		<script src="../js/valid/jquery.js"></script>
		<script type="text/javascript" src="../js/valid/jquery.validate.js"></script>
		<script type="text/javascript" src="../js/valid/messages_id.js"></script>
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