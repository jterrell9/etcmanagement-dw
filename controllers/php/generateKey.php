<?php
$key64 = openssl_random_pseudo_bytes(64);
echo base64_encode($key64);
?>