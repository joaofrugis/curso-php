<?php

# I - Segregação de Interface
# Nas interfaces devem ter apenas os métodos essenciais e apenas o que será utilizado por quem esta implementando.
# Ex: Papagaio terá altitude pois ele voa, ja o pinguim não voa, portanto o setAltitude não deve pertencer a aves;

# Implementação que viola a regra;
/*
interface Aves {
    public function setLocation($lat, $lng);
    public function setAltitude($alt);
    public function render();
}

class Papagaio implements Aves{
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}

class Penguim implements Aves{
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}
*/

#Implementação correta segregando a interface Aves em AvesQueVoam (este caso é um tipo de exceção);
interface Aves {
    public function setLocation($lat, $lng);
    public function render();
}
interface AvesQueVoam extends Aves{
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam{
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}

class Penguim implements Aves{
    public function setLocation($lat, $lng) {}
    public function render() {}
}

?>