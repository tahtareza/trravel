<?php 

$server="localhost";
$usernames="root";
$passwords="";
$database="trravel";
$mysqli=mysqli_connect($server, $usernames, $passwords, $database);

if(mysqli_connect_errno()){
	echo "Koneksi gagal, ada masalah pada : ".mysqli_connect_error();
	exit();
	mysqli_close($mysqli);
}

 ?>