<?php
class Matematica {

    public static string $nome = 'João'; 

    public static function somar($x, $y) {
        return $x + $y;
    }

}

// // usando função não estática
// $m = new Matematica();
// echo $m->somar(30,20);

echo Matematica::somar(20,39)."<br/>";
echo Matematica::$nome;