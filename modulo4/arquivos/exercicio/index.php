
<form method="POST">
    <input type="text" name="nome" placeholder="Digite um nome"/>
    <input type="submit" name="enviar" />
</form>

<?php

$novoNome = filter_input(INPUT_POST, 'nome');

if (isset($novoNome) && $novoNome != ''){
    $nomes = file_get_contents('nomes.txt');
    $nomes .= "\n$novoNome";
    file_put_contents('nomes.txt', $nomes);
    $nomes = explode("\n", $nomes);

    echo '<ul>';
    foreach ($nomes as $nome) {
        echo '<li>'.$nome.'</li>';    
    }
    echo '</ul>';
} else {
    $nomes = file_get_contents('nomes.txt');
    $nomes = explode("\n", $nomes);

    echo '<ul>';
    foreach ($nomes as $nome) {
        echo '<li>'.$nome.'</li>';    
    }
    echo '</ul>';
}
?>
