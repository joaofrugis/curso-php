<?php
$array = [
    'nome' => 'João',
    'idade' => 26,
    'emrpesa' => 'madeiranit',
    'cor' => 'vermelho',
    'profissao' => 'dsenvolvedor'
];

if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade." anos";
} else {
    echo "Não tem idade";
}