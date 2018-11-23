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
        {//volver a poner el md5
          $result = $this->connection->runQuery("SELECT * FROM usuarios WHERE email = '$email' and password = md5('$password');");
          return $result[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM usuarios');
        }

        public function insert($email, $password)
        {
            $sql = "INSERT INTO usuarios VALUES ($password,$1, md5($2),false)";
            $this->connection->runStatement($sql, [$email, $password]);
        }
    }
}


