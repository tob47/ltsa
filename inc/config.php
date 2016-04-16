<?php
$host = "localhost";
// Host name

$username = "root";
// Mysql username
$password = "";
// Mysql password
$db_name = "db_lts";
// Database name
// Connect to server and select database.
mysql_connect("$host", "$username", "$password") or die("cannot connect" . mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
?>