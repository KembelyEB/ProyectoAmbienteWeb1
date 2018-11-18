<?php
namespace Models {
    class Cliente
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM clientes WHERE id = $1', [$id])[0];
        }

        public function select()
        {
            return $this->connection->runQuery('SELECT * FROM clientes ORDER BY id');
        }

        public function insert($nombre, $apellido,$correo,$direccion,$telefono)
        {
            $this->connection->runStatement('INSERT INTO clientes(nombre,apellido,correo,direccion,telefono,) VALUES ($1, $2)', [$nombre, $apellido,$correo,$direccion,$telefono]);
        }

        public function update($id, $nombre,$apellido,$correo,$direccion,$telefono)
        {
            $this->connection->runStatement('UPDATE clientes SET nombre = $2, apellido=$3,correo=$4,
                direccion=$5,telefono =$6 WHERE id = $1', [$id, $nombre, $apellido,$correo,$direccion,$telefono]);
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM clientes WHERE id = $1', [$id]);
        }
    }
}
