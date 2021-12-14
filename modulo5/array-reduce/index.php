<?php
/*
$numeros = [1,2,3,4,5];

function somar($subtotal, $item) {
    $subtotal = $subtotal + $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');
echo $total;
*/

$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cicrano', 'sexo' => 'M', 'nota' => 10],
    ['nome' => 'Beltrano', 'sexo' => 'M', 'nota' => 4],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 2],
    ['nome' => 'Fatima', 'sexo' => 'F', 'nota' => 6],
    ['nome' => 'Silvia', 'sexo' => 'F', 'nota' => 8]
];

// Total de Homens
function contar_m($subtotal, $item) {
    if ($item['sexo'] === 'M'){
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($pessoas, 'contar_m');

// Soma das notas dos homens
function soma_m($subtotal, $item) {
    if ($item['sexo'] === 'M'){
        $subtotal += $item['nota'];
    } 
    return $subtotal;
}
$soma_m = array_reduce($pessoas, 'soma_m');

// Media dos homens
$media_m = $soma_m / $total_m;


echo "Total de Homens: ".$total_m."<br/>";
echo "Soma das notas dos Homens: ".$soma_m."<br/>";
echo "Media das notas dos Homens: ".$media_m."<br/>";