<?php
// PDO connect *********
function connect() {
	$host = 'localhost';
	$db_name = 'soforluarackirala';
	$db_user = 'root';
	$db_password = '';
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	try{
		$db=new PDO("mysql:host=$host;dbname=$dbase",$user,$pass);
	}catch(PDOException $e){
		print $e->getMessage();
	}
}
?>