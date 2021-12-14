<?php
//LER arquivo
// $texto = file_get_contents('leitura.txt');
// $texto = explode("\n", $texto);

// echo "PARAGRAFOS: ".count($texto);

//ESCREVER
// $texto = 'João Frugistetst';
// file_put_contents('escrita.txt', $texto);
// echo 'Arquivo criado com sucesso.'

$texto = file_get_contents('arquivo.txt');
$texto .= "\nJoãoFrugis";
file_put_contents('arquivo.txt', $texto);