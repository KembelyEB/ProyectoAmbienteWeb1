<?php
namespace Models {
    class Compra
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM compras WHERE id = $1', [$id])[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM compras ORDER BY id');
        }

        public function insert($id_cliente, $id_producto, $total)
        {
            $this->connection->runStatement('INSERT INTO compras(id_cliente, id_producto, total) VALUES ($1, $2, $3)', [$id_cliente, $id_producto, $total]);
        }

        public function update($id, $id_cliente, $id_producto, $total)
        {
            $this->connection->runStatement('UPDATE compras SET id_cliente = $2, id_producto = $3, total = $4, WHERE id = $1', [$id, $id_cliente, $id_producto, $total]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM compras WHERE id = $1', [$id]);
        }
    }
}
