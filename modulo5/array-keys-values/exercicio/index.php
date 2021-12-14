<?php
$array = [
    'nome' => 'João',
    'idade' => 26,
    'emrpesa' => 'madeiranit',
    'cor' => 'vermelho',
    'profissao' => 'dsenvolvedor'
];

$colunas = array_keys($array);
$linhas = array_values($array);
?>

<!-- Exercicio 1!-->
<table border="1">
    <?php foreach ($array as $chave => $valor): ?>
        <tr>
            <td><?php echo $chave; ?></td>
            <td><?php echo $valor; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Exercicio 2!-->
<table border="1">
    <tr>
        <?php
        foreach ($colunas as $itens) {
            echo '<th>'.$itens.'</th>';
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($linhas as $itens) {
            echo '<td>'.$itens.'</td>';
        }
        ?>
    </tr>
</table>