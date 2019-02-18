<!--This script connects to the MySQL database-->
<?php
$sConnected = false;
$dbLink = null;
try{
	$dsn = 'mysql:host=localhost;dbname=jterrell_etc-users';
	$dbUsername = 'jterrell_etc';
	$dbPassword = '6RgVeJQ$(@TL';
	$dbLink = new PDO($dsn,$dbUsername,$dbPassword);
	$isConnected = true;
}catch(PDOException $e) {
	$errorMessage = $e->getMessage();
	echo '<script>console.log('.$errorMessage.')</script>';
}catch(Exception $e){
	$errorMessage = $e->getMessage();
	echo '<script>console.log("errorMessage")</script>';
}
?>