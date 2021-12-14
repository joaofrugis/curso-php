<?php
$senha = '1234'; 
$hash1 = '';
$hash2 = '';

$hash1 = password_hash($senha, PASSWORD_DEFAULT);
$hash2 = password_hash($senha, PASSWORD_BCRYPT);

echo "Senha Original: ".$senha."<br/>";
echo "HASH1: ".$hash1."<br/>";
echo "HASH2: ".$hash2;

?>