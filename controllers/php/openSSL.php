<!--uses openSSL encrption to encryptand decrypt passwords and other sensitive data-->
<?php
$KEY = base64_encode(file_get_contents('/home1/jterrell/etcmanagment-config/.conf/globals.php'));
function encrypt($plaintext){
	$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
	$iv = openssl_random_pseudo_bytes($ivlen);
	$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $KEY, $options=OPENSSL_RAW_DATA, $iv);
	$hmac = hash_hmac('sha256', $ciphertext_raw, $KEY, $as_binary=true);
	return [
		"iv" => $iv,
		"hmac" => $hmac,
		"ciphertext" => $ciphertext_raw,
	];
}

function decrypt($ciphertextDB,$ivDB,$hmacDB){
	$ciphertext_raw = substr($c, $ivlen+$sha2len);
	$original_plaintext = openssl_decrypt($ciphertextDB, "AES-128-CBC", $KEY, $options=OPENSSL_RAW_DATA, $ivDB);
	$calcmac = hash_hmac('sha256', $ciphertextDB, $KEY, $as_binary=true);
	if (hash_equals($hmacDB, $calcmac)) {		//PHP 5.6+ timing attack safe comparison
		return $original_plaintext;
	}else{
		throw new Exception('timing attack safe comparison failed.');	
	}
}
?>