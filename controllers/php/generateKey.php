<!--secret key generator for openSSL encryption-->
<!--Authored by Jack Terrell-->
<!--Copyright StrongWares Consulting LLC and Etc. Management LLC 2019-->

<?php
$file = '';	//put file location of secret.key here
$handle = fopen($file, 'w');
$key64 = openssl_random_pseudo_bytes(64);
fwrite($handle, $key64);
fclose($handle);
?>