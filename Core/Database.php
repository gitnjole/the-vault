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

    public function one()
    {
        return $this->statement->fetch();
    }

    public function all()
    {
        return $this->statement->fetchAll();
    }
    
    public function findOrFail()
    {
        $result = $this->one();

        if (! $result) {
            abort(404);
        }

        return $result;
    }
}

