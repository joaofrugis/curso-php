<?php
$pdo = new PDO("mysql:dbname=test;host=localhost", "root");

# $sql = $pdo->query('INSERT INTO usuarios (nome, email) VALUES ("Fruges","joaofrugis@gmail.com");');
$sql = $pdo->query('SELECT * FROM usuarios;');

$dados = $sql->fetchAll( PDO::FETCH_ASSOC);

echo '<pre>';
print_r($dados);