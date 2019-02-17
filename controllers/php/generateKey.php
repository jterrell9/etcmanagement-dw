<?php
$File = '';	//put file location of secret.key here
$Handle = fopen($File, 'w');
$key64 = openssl_random_pseudo_bytes(64);
fwrite($Handle, $key64);
fclose($Handle);
?>