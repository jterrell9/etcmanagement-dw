<!--This script connects to the MySQL database-->
<?php
$isConnected = false;
$dsn = 'mysql:host=localhost;dbname=jterrell_etc-users';
$dbUsername = 'jterrell_etc';
$dbPassword = '';
try{
	$dbLink = new PDO($dsn,$dbUsername,$dbPassword);
	echo "<script>console.log('MySQL connection successful')</script>";
	$isConnected = true;
}catch(PDOException $e){
	echo "<script>console.log('".$e->getMessage()."')</script>";
	$isConnected = false;
}
?>