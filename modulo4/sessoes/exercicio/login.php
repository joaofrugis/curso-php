<?php
session_start();
?>

<form method="POST" action="index.php">

    <label>
        <h2>Qual Seu Nome?</h2>
        <br/>
        <input type="text" name="name" placeholder="Digite seu nome"/>
        <br/>
        <br/>
    </label>
        <input type="submit" name="enviar" />

</form>