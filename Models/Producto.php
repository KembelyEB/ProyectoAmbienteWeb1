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

        public function selectstock($stock)                  
        {
            return $this->connection->runQuery("SELECT * FROM productos WHERE stock <= $stock");
        }

        public function insert($sku, $nombre, $descripcion, $id_categoria, $stock, $precio)
        {
            $this->connection->runStatement('INSERT INTO productos(sku,nombre,descripcion,id_categoria,stock,precio) VALUES ($sku,$1, $2, $3, $4, $5, $6)', [$sku,$nombre,$descripcion,$id_categoria,$stock,$precio]);
        }

        public function update($id, $sku, $nombre, $descripcion, $id_categoria, $stock, $precio)
        {
            $this->connection->runStatement('UPDATE productos SET sku = $2, nombre = $3, descripcion = $4, id_categoria = $5, stock = $6, precio = $7  WHERE id = $1', [$id, $sku,  $nombre, $descripcion, $id_categoria, $stock, $precio]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM productos WHERE id = $1', [$id]);
        }
    }
}
