<?php


# O - Aberto/Fechado
# Este princípio se da pelo fato das classes seram Abertas para extensão e Fechadas para modificação;

# Metodo errado de implementação que viola o padrão Solid;
/*
class ContratoClt {

    public function calcularSalario() {}
}

class Estagio {

    public function bolsaAuxilio() {}

}
class ContratoPj{

    public function calcularPagamento() {}
}

class FolhaDePagamento {

    public function calcular($funcionario) {
        $salario = 0;
        
        if($funcionario instanceof ContratoClt){
            $salario = $funcionario->calcularSalario();
        } elseif($funcionario instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } elseif($funcionario instanceof ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;
    }
}
*/
# Método correto: 

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel{

    public function remuneracao(){}
}

class Estagio implements Remuneravel{

    public function remuneracao(){}

}
class ContratoPj{

    public function remuneracao() {}
}
class ContratoInternacional implements Remuneravel {
    
    public function remuneracao() {}
}


class FolhaDePagamento {

    public function calcular(Remuneravel $funcionario) {
        return $funcionario->remuneracao();
    }
}
?>