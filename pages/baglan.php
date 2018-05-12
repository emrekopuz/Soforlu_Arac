<?php
$host="localhost";
$user="root";
$pass="";
$dbase="soforluarackirala";
try{
	$db=new PDO("mysql:host=$host;dbname=$dbase",$user,$pass);
}catch(PDOException $e){
	print $e->getMessage();
}
?>
