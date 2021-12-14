<?php

# D - Inversão de Dependência
# Quando a injeção de dependência esta sendo realizada e você pode modificar a dependência que esta sendo injetada dentro da classe, o ideal é criar uma interface para utilizar dentro das dependências;
# Só é utilizado quando se tem diversos tipos de dependências a sere, fornecidas na injeção;

# Implementação errada, enviando o Tipo do objeto (no caso o tipo de conexão) para o construtor da classe DAO:
/*
class MySQLConnection {
    public function connect() {}
}

class OracleConnection {

}

class UsuarioDAO {
    private $db;

    public function __construct(OracleConnection $dbCon){
        $this->db = $dbCon;
    }
}
*/

# Implementação correta, criando a interface DBConnection e enviando ela no construtor do DAO, ao invés de enviar a classe em si.

interface DBConnection {
    public function connect();
}
class MySQLConnection implements DBConnection {
    public function connect() {}
}

class OracleConnection implements DBConnection {
    public function connect() {}
}

class MongoDBConnection implements DBConnection{
    public function connect() {}
}

class UsuarioDAO {
    private $db;

    public function __construct(DBConnection $dbCon){
        $this->db = $dbCon;
    }
}

?>