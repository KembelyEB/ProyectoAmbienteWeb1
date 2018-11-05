<?php

namespace Models {
    class Usuario
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function login($usuario, $password)
        {
          $result = $this->connection->runQuery('SELECT * FROM usuarios WHERE usuario = $1 and password = md5($2)', [$usuario, $password]);
          return $result[0];
        }

        public function insert($usuario, $password)
        {
            $sql = "INSERT INTO usuarios(usuario, password) VALUES ($1, md5($2))";
            $this->connection->runStatement($sql, [$usuario, $password]);
        }
    }
}


