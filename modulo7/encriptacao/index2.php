<?php

$hash = '$2y$10$hEl06AljysvC.CqQf9HFROl6mBrR0/F4TglTfCrNku0JeplYiiVNu';
$senha = '1234';

if (password_verify($senha, $hash)) {
    echo 'Senha correta!';
} else {
    echo 'Senha errada!';
}