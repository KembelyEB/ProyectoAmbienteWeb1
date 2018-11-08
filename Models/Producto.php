<?php
namespace Models {
    class Producto
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM productos WHERE id = $1', [$id])[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM productos ORDER BY id');
        }

        public function insert($sku, $nombre,$descripcion,$categoria,$stock,$precio)
        {
            $this->connection->runStatement('INSERT INTO productos(sku,nombre,descripcion,categoria,stock,precio) VALUES ($1, $2,$3,$5,$6)', [$sku,$nombre,$descripcion,$categoria,$stock,$precio]);
        }

        public function update($id, $sku, $nombre, $descripcion,$categoria,$stock,$precio)
        {
            $this->connection->runStatement('UPDATE productos SET nombre = $2, descripcion = $3 , categoria = $4,stock = $5, precio = $6  WHERE id = $1', [$id, $sku,  $nombre, $descripcion,$categoria,$stock,$precio]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM productos WHERE id = $1', [$id]);
        }
    }
}
