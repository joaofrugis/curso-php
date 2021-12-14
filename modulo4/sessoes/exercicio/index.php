<?php
session_start();
$_SESSION['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$_SESSION['name']) {
    header("Location: login.php");
}

echo 'Ola '.$_SESSION['name'].'- <a href="login.php"> Sair <a>';
$_SESSION['name'] = '';

?>

