<?php
//Authored By Jack Terrell
//Copyright StrongWare LLC and Etc. Management LLC 2019

//This model defines a function for adding users into the member table and user database

//include openSSL encryption and descryption support
include '../../controllers/php/openSSL.php';

//This function connects to the MySQL database, and then populates a new member record
//@param: $group_name is artist/company name from registration form
//@param: $fname is user's first name from registration form
//@param: $lname is user's last name from registration form
//@param: $email is user's email from registration form
//@param: $instagram is user's instagram name from registration form
//@param: $phone is user's phone from registration form
//@param: $password is user's password from registration form
//returns boolean value to validate completion
function addMember($group_name,$fname,$lname,$email,$phone,$password){
	//connect to MySQL database
	$isConnected = false;
	$dsn = 'mysql:host=localhost;dbname=jterrell_etc-users';
	$dbUsername = 'jterrell_etc';
	$dbPassword = file_get_contents('/home1/jterrell/etcmanagment-config/.conf/mysql.key');
	try{
		$dbLink = new PDO($dsn,$dbUsername,$dbPassword);
		echo "<script>console.log('MySQL connection successful')</script>";
		$isConnected = true;
	}catch(PDOException $e){
		echo "<script>console.log('".$e->getMessage()."')</script>";
		$isConnected = false;
		return false;
	}
	
	if($isConnected){
		
		//encrypt password
		$passwordHash = encrypt($password);
		echo "<script>console.log(\"password encrypted using openSSL\")</script>"."\r\n";
		
		//store input data in array
		$member = [
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

		//insert registration form data into members table
		$sql = "INSERT INTO members (account_type_id, group_name, fname, lname, email) ".
			"VALUES (2, :group_name, :fname, :lname, :email)";
		try{
			$statement = $dbLink->prepare($sql);
			$statement->bindValue(':group_name', $member['group_name']);
			$statement->bindValue(':fname', $member['fname']);
			$statement->bindValue(':lname', $member['lname']);
			$statement->bindValue(':email', $member['email']);
			$statement->execute();
			echo "<script>console.log(\"".$sql."\");</script>";
		}catch(PDOException $e){
			echo "<script>console.log('".$e->getMessage()."')</script>";
		}
		$member_id = (int)$dbLink->lastInsertId();
		echo "<script>console.log('member-id: ".$member_id."');</script>";
		if($member_id == 0){
			return false;
		}
		
		//inert phone into phone table
		$sql = "INSERT INTO phone (member_id, phone) ".
			"VALUES (:member_id, :phone)";
		try{
			$statement = $dbLink->prepare($sql);
			$statement->bindValue(':member_id', $member_id);
			$statement->bindValue(':phone', $member['phone']);
			$statement->execute();
			echo "<script>console.log(\"".$sql."\");</script>";
		}catch(PDOException $e){
			echo "<script>console.log('".$e->getMessage()."')</script>";
		}
		
		//insert encrypted password data into login table
		$sql = "INSERT INTO login (member_id, iv, hmac, hash_password) ".
			"VALUES (:member_id, :iv, :hmac, :hash_password)";
		try{
			$statement = $dbLink->prepare($sql);
			$statement->bindValue(':member_id', $member_id);
			$statement->bindValue(':iv', $member['iv']);
			$statement->bindValue(':hmac', $member['hmac']);
			$statement->bindValue(':hash_password', $member['hash_password']);
			$statement->execute();
			echo "<script>console.log(\"".$sql."\");</script>";
		}catch(PDOException $e){
			echo "<script>console.log('".$e->getMessage()."')</script>";
		}
	}else{
		echo "<script>console.log('ERROR: not connected to database')</script>";
	}
	return true;
}
?>