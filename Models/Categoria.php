<?php
namespace Models {
    class Categoria
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM categorias WHERE id = $1', [$id])[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM categorias ORDER BY id');
        }

        public function insert($nombre, $categoriap)
        {
            $this->connection->runStatement('INSERT INTO categorias(nombre, categoriap) VALUES ($1, $2)', [$nombre, $categoriap]);
        }

        public function update($id, $nombre, $categoriap)
        {
            $this->connection->runStatement('UPDATE categorias SET nombre = $2, categoriap = $3 WHERE id = $1', [$id, $nombre, $categoriap]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM categorias WHERE id = $1', [$id]);
        }
    }
}
