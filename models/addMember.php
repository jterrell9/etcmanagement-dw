<!--
	This model defines a function for adding users 
	into the member table and user database
-->

<?php

include '../../controllers/php/openSSL.php';

function addMember($group_name,$fname,$lname,$email,$instagram,$phone,$password){
	$sConnected = false;
	$dsn = 'mysql:host=localhost;dbname=jterrell_etc-users';
	$dbUsername = 'jterrell_etc';
	$dbPassword = '6RgVeJQ$(@TL';
	$dbLink = new PDO($dsn,$dbUsername,$dbPassword);
	$isConnected = true;

	$accountAlreadyExists = false;
	
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
	
	
	$result = $dbLink->query('SELECT * FROM members WHERE email='.$data['email']);
	
	if($result->num_rows > 0){
		$accountAlreadyExists = true;
//		echo '<script>console.log( "Account for '.$data['email'].' already exists. " );</script>';
		return;
	}
	echo '<script>console.log( "No account exists for '.$data['email'].'" );</script>';
	
	$sql = 'INSERT INTO members (group_name, fname, lname, email) '.
		'VALUES ('.$data['group_name'].','.$data['fname'].','.$data['lname'].",'".$data['email']."')";
//	echo '<script>console.log( \''.$sql.'\''' );</script>';
	$stmt = $dbLink->prepare($sql);
	$stmt->execute();
	
	$sql = 'SELECT member_id FROM members where email="'.$data['email'].'"';
//	echo '<script>console.log( "'.$sql.'" );</script>';
	$stmt = $dbLink->prepare($sql);
	$stmt->execute();
	$member_id = $stmt->fetch(PDO::FETCH_ASSOC);
//	echo '<script>console.log( "member_id: '.print_r($member_id).'" );</script>';
	
	$sql = 'INSERT INTO instagram (member_id, instagram_name) '.
		'VALUES ('.$member_id['member_id'].','.$data['instagram_name'].')';
//	echo '<script>console.log( "'.$sql.'" );</script>';
	$stmt= $dbLink->prepare($sql);
	$stmt->execute();
	
	$sql = 'INSERT INTO phone (member_id, phone) '.
		'VALUES ('.$member_id['member_id'].','.$data['phone'].')';
//	echo '<script>console.log( "'.$sql.'" );</script>';
	$stmt= $dbLink->prepare($sql);
	$stmt->execute();
	
	$sql = 'INSERT INTO login (member_id, iv, hmac, hash_password) '.
		'VALUES ('.$member_id['member_id'].','.$data['iv'].','.$data['hmac'].','.$data['hash_password'].')';
//	echo '<script>console.log( "'.$sql.'" );</script>';
	$stmt= $dbLink->prepare($sql);
	$stmt->execute();
}

?>