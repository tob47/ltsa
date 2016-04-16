<?php
session_start(); 
//file konfigurasi
include ('inc/config.php'); 
 
	$spf=sprintf("Select * from pengelola where username='%s' and password='%s'",$_POST['username'],md5($_POST['password']));
	$rs=mysql_query($spf);
	$rw=mysql_fetch_array($rs);
	$rc=mysql_num_rows($rs);
	
	if($rc==1)
	{
		$_SESSION['login_hash']=$rw['level'];
		$_SESSION['login_user']=$rw['username']; 
		echo "<script>window.location='utama.php'</script>";
	}else{
	echo "<script>window.location='index.php?status=1'</script>"; 
	}
?>
