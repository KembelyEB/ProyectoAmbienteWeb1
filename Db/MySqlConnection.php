<?php

namespace Db {
    use Mysqli;

    require_once __DIR__ . '/DbConnection.php';
    class MySqlConnection extends DbConnection
    {
        private $connection;
        public function __construct($user, $password, $database, $port, $server)
        {
            parent::__construct($user, $password, $database, $port, $server);
        }

        public function connect()
        {
            $this->connection = new mysqli($this->server, $this->user, $this->password, $this->database);
        }

        public function disconnect()
        {
            $this->connection->close();
        }

        public function runQuery($sql, $params = [])
        {
            $stmt = $this->runStatement($sql, $params);
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        public function runStatement($sql, $params = [])
        {
            $stmt = $this->connection->prepare($sql);
            if ($params) {
                $stmt->bind_param($this->dbTypes($params), ...$params);
            }
            $stmt->execute();
            return $stmt;
        }

        private function dbTypes($params)
        {
            $result = '';
            foreach ($params as $param) {
                $result .= gettype($param)[0];
            }
            return $result;
        }
    }
}
