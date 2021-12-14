<?php

# S - Princípio da Responsabilidade Única
# S do solid nada mais é que separar as responsábilidades das classes; As clsses devem ter responsábilidades únicas;
# Problema com alto acoplamento; 

# ERRADO
/*
class Usuario {

    #Funçoes de manipulação do Objeto;
    public function setNome() {}
    public function getNome() {}
    public function setEmail() {}
    public function getEmail() {}

    #Funções de manipulação com o BD;
    public function add(){}
    public function update(){}
    public function delete(){}
}
*/

#CORRETO 
class Usuario {

    public function setNome() {}
    public function getNome() {}
    public function setEmail() {}
    public function getEmail() {}
}

# No caso seria interessante essa classe estar em outro arquivo deixando as resnponsabilidades separadas; 
class UsuarioDb { 
    public function add(Usuario $u){}
    public function update(Usuario $u){}
    public function delete($id){}

}

?>