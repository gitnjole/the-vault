<?php

namespace Core;

use PDO;
use PDOException;

class Database
{
    private ?PDO $connection = null;
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
        if (!empty($params)) {
            foreach ($params as $key => $value) {
                $this->statement->bindValue($key, $value);
            }
        }
        $this->statement->execute($params);

        return $this;
    }

    public function insert(array|string $query, array $params = [])
    {
        try {
            $this->connection->beginTransaction();

            $this->statement = $this->connection->prepare($query['samples']);
            $this->statement->execute($params['samples']);

            $lastInsertId = $this->connection->lastInsertId();

            $this->statement = $this->connection->prepare($query['user_relations']);
            $this->statement->execute(array_merge(
                $params['user_submissions'],
                ['sample_id' => $lastInsertId]
            ));

            $this->connection->commit();

            return true;
        } catch (PDOException $error) {
            $this->connection->rollBack();
            echo "Error: " . $error->getMessage();
            return false;
        }
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

