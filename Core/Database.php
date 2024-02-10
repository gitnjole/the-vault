<?php

namespace Core;

use PDO;

class Database
{
    private $connection = null;
    private $statement = null;

    public function __construct(
        private array $config = []
    ) {
        $this->connection = new PDO(
            $config['DSN'],
            $config['DB_USER'],
            $config['DB_PASS'],
            $config['DB_PARAMS'],
        );
    }

    public function query(string $query, array $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        if (!empty($values)) {
            foreach ($values as $key => $value) {
                $this->statement->bindValue($key, $value);
            }
        }
        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findAll()
    {
        return $this->statement->fetchAll();
    }
}

