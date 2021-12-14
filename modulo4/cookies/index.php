<?php 
session_start();
require('header.php');

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href='apagar.php'>Apagar Cookie </a>

<form method="POST" action="recebedor.php"> 
    <label>
        Usuário:
        <br/>
        <input type="text" name="nome" placeholder="Digite seu Usuário" />
    </label>
    <br/>
    <br/>

    <label>
        Email:
        <br/>
        <input type="text" name="email" placeholder="Digite seu Email" />
    </label>
    <br/>
    <br/>

    <label>
        Idade:
        <br/>
        <input type="text" name="idade" placeholder="Digite sua Idade" />
    </label>
    <br/>
    <br/>
    
    <input type="submit" name="Enviar" />
</form>