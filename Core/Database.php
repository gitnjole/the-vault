<?php

namespace Core;

use PDO;

class Database 
{
    private $connection;
    public function __construct($config, $user)
    {
        $dsn = 'mysql:'. http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $user['username'], $user['password'], [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $statement = $this->connection->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}
