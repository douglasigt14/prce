<?php

class Database
{
    private $host = 'localhost';
    private $db   = 'u517242272_prce';
    private $user = 'u517242272_prce_root';
    private $pass = '&SgVfW8s/';
    private $charset = 'utf8mb4';

    private $dsn;
    private $option = [
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    public function __construct()
    {
        $this->dsn = 'mysql:host='.$this->host.';dbname='.$this->db.';charset='.$this->charset;
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->pass, $this->option);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare($sql);
            foreach ($parameters as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function select($table, $conditions = [])
    {
        $sql = sprintf('SELECT * FROM %s', $table);

        if (!empty($conditions)) {
            $sql .= ' WHERE '.implode(' AND ', array_map(function ($key) {
                return $key.' = :'.$key;
            }, array_keys($conditions)));
        }

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare($sql);
            foreach ($conditions as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function update($table, $parameters, $conditions)
    {
        $sql = sprintf(
            'UPDATE %s SET %s WHERE %s',
            $table,
            implode(', ', array_map(function ($key) {
                return $key.' = :'.$key;
            }, array_keys($parameters))),
            implode(' AND ', array_map(function ($key) {
                return $key.' = :'.$key;
            }, array_keys($conditions)))
        );

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare($sql);
            foreach ($parameters as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            foreach ($conditions as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function delete($table, $conditions)
    {
        $sql = sprintf(
            'DELETE FROM %s WHERE %s',
            $table,
            implode(' AND ', array_map(function ($key) {
                return $key.' = :'.$key;
            }, array_keys($conditions)))
        );

        try {
            $pdo = $this->connect();
            $stmt = $pdo->prepare($sql);
            foreach ($conditions as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            return $stmt->execute();
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }
}

/* example usage
$pdo = new Database();

$pdo->insert('your_table', [
    'column1' => 'value1',
    'column2' => 'value2',
]);

$rows = $pdo->select('your_table', [
    'column1' => 'value1',
]);

$pdo->update('your_table', [
    'column1' => 'new_value1',
    'column2' => 'new_value2',
], [
    'column1' => 'value1',
]);

$pdo->delete('your_table', [
    'column1' => 'new_value1',
]);
*/