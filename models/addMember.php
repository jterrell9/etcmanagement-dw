<!--
	This model defines a function for adding users 
	into the member table and user database
-->

<?php

include '../../controllers/php/openSSL.php';
include 'mysql-connect.php';

$dbLink = connectMySQL();

function addMember($group_name,$fname,$lname,$email,$instagram,$phone,$password){
	$passwordHash = encrypt($password);
	$data = [
		'group_name' => $group_name,
		'fname' => $fname,
		'lname' => $lname,
		'email' => $email,
		'instagram_name' => $instagram,
		'phone' => $phone,
		'iv' => $passwordHash['iv'],
		'hmac' => $passwordHash['hmac'],
		'hash_password' => $passwordHash['ciphertext'],
	];
	$sql = "INSERT INTO members (name, surname, sex) VALUES (:name, :surname, :sex)";
	$stmt= $pdo->prepare($sql);
	$stmt->execute($data);
}

?>