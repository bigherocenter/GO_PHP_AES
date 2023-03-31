<?php

$plainText = 'Hello, World!';
echo "This is an original: {$plainText}\n";

$key= "my32digitkey12345678901234567890";
$iv = "my16digitIvKey12";
$encrypted = openssl_encrypt(
    $plainText,
    'AES-256-CBC',
    $key,
    0,
    $iv
);
echo "This is an encrypted: {$encrypted}\n";

$decrypted = openssl_decrypt(
    $encrypted,
    'AES-256-CBC',
    $key,
    0,
    $iv
);
echo "This is a decrypted: {$decrypted}\n";

?>