<?php 
	define('DB_SERVER','localhost');
	define('DB_NAME', 'bestshow_sinobectrading');
	define('DB_USER', 'bestshow_sinobec');
	define('DB_PASSWORD', '#@1}hU+ff7an');
	//Database connection
		try{
			$conn = new pdo("mysql:host=".DB_SERVER."; dbname=".DB_NAME,DB_USER,DB_PASSWORD);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			die("Connection failed".$e->getMessage);
		}
?>