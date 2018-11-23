<?php

namespace Models {
    class Usuario
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function login($email, $password)
        {
          $result = $this->connection->runQuery('SELECT * FROM usuarios WHERE email = $1 and password = md5($2)', [$email, $password]);
          return $result[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM usuarios');
        }

        public function insert($email, $password)
        {
            $sql = "INSERT INTO usuarios(email, password) VALUES ($1, md5($2)";
            $this->connection->runStatement($sql, [$email, $password]);
        }
    }
}


