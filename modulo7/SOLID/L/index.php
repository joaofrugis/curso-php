<?php

# L - Substituição de Liskov
#CONCEITO
# Se eu criar 2 classes onde 1 extenda a outra e, eu substitua algum método da classe extendida, se por um acaso uma função, métodos, etc estejam utilizando o metodo da classe extendida, ela deve poder utilizar a classe B sem nenhum problema;
# Precisamos garantir que os métodos que estão sendo substituidos sejam fidedignos ao método da classe extendida;
# Traduzindo o: O método da classe B deve ter o mesmo princípio de retorno em getNome() da classe A;

# Implementação correta;
class A {
    public function getNome(){
        return "Meu nome é A";
    }
}

class B extends A {

    public function getNome() {
        return "Meu nome é B";
    }
}

function imprimeNome(A $obj) {
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();

echo imprimeNome($objeto1)."<br/>";
echo imprimeNome($objeto2);

?>