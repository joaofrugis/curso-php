<?php
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
// $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

//Filtro Variável
// $sobrenome = 'Frugis'; 
// filter_var($sobrenome, FILTER_VALIDADE_STRING)

/*
FILTER_VALIDADE_EMAIL
FILTER_VALIDADE_INT
FILTER_VALIDADE_IP
FILTER_VALIDATE_NUMBER
FILTER_VALIDATE_NUMBER_FLOAT
FILTER_VALIDADE_URL

FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_STRING
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT
FILTER_SANITIZE_NUMBER

*/
if ($nome && $email && $idade) {
    echo 'NOME: '.$nome.'<br/>';
    echo 'EMAIL: '.$email.'<br/>';
    echo 'IDADE: '.$idade;
} else {
    header("Location: index.php");
    exit;
}