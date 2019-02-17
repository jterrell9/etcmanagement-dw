<?php
$sConnected = false;
function connectMySQL(){
	try{
		$dsn = 'mysql:host=localhost;dbname=jterrell_etc-users';
		$dbUsername = 'jterrell_etc';
		$dbPassword = '6RgVeJQ$(@TL';
		$db = new PDO($dsn,$dbUsername,$dbPassword);
		$isConnected = true;
		return $db;
	}catch(PDOException $e) {
		$errorMessage = $e->getMessage();
		echo '<script>document.alert("errorMessage")</script>';
	}catch(Exception $e){
		$errorMessage = $e->getMessage();
		echo '<script>document.alert("errorMessage")</script>';
	}
}

?>