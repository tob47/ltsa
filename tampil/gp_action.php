<?php 
if(isset($_POST)){
$username=$_POST['username'];
$password = md5(trim($_POST['password'])); 

$sql = "update pengelola set password='$password' where username='$username'";

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	echo "<script>window.location='?fo=tampil&pg=gp&status=0'</script>"; 
} else {
	echo "<script>window.location='?fo=tampil&pg=gp&status=1'</script>"; 
}
}
?>
