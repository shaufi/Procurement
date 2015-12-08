<?php
$dbhost = "localhost";
$dbuser = "root";
$password = "";
$dbname = "register";
 		
$con = mysql_connect($dbhost, $dbuser, $password) or die
("Koneksi gagal");
mysql_select_db($dbname, $con);
?>
