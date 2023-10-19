<?php 

namespace web\Models;

class UserModel
{

        private $connection;

        public function __construct($connection)
        {
            $this->setConnection($connection);
        }

        public function setConnection($connection)
        {
            $this->connection = $connection;
        }

     
        public function find(string $emailUser) : Array | bool
        {
            $query = "SELECT * FROM users";
            $result = $this->connection->query($query);
            return $result->fetch_assoc();
        }
    }
?>