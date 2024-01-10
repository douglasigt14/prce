<?php

$host = 'srv1056.hstgr.io';
$db = 'u517242272_prce';
$user = 'u517242272_prce_root';
$pass = 'B&SgVfW8s/';
$charset = 'utf8mb4';

$dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=' . $charset;

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

function connect()
{
    global $dsn, $user, $pass, $option;
    try {
        return new PDO($dsn, $user, $pass, $option);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int) $e->getCode());
    }
}

function insert($table, $parameters)
{
    global $dsn, $user, $pass, $option;
    $sql = sprintf(
        'INSERT INTO %s (%s) VALUES (%s)',
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters))
    );

    try {
        $pdo = connect();
        $stmt = $pdo->prepare($sql);
        foreach ($parameters as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int) $e->getCode());
    }
}

function select($table, $conditions = [])
{
    global $dsn, $user, $pass, $option;
    $sql = sprintf('SELECT * FROM %s', $table);

    if (!empty($conditions)) {
        $sql .= ' WHERE ' . implode(' AND ', array_map(function ($key) {
            return $key . ' = :' . $key;
        }, array_keys($conditions)));
    }

    try {
        $pdo = connect();
        $stmt = $pdo->prepare($sql);
        foreach ($conditions as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        $stmt->execute();

        return $stmt->fetchAll();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int) $e->getCode());
    }
}

function update($table, $parameters, $conditions)
{
    global $dsn, $user, $pass, $option;
    $sql = sprintf(
        'UPDATE %s SET %s WHERE %s',
        $table,
        implode(', ', array_map(function ($key) {
            return $key . ' = :' . $key;
        }, array_keys($parameters))),
        implode(' AND ', array_map(function ($key) {
            return $key . ' = :' . $key;
        }, array_keys($conditions)))
    );

    try {
        $pdo = connect();
        $stmt = $pdo->prepare($sql);
        foreach ($parameters as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        foreach ($conditions as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int) $e->getCode());
    }
}

function delete($table, $conditions)
{
    global $dsn, $user, $pass, $option;
    $sql = sprintf(
        'DELETE FROM %s WHERE %s',
        $table,
        implode(' AND ', array_map(function ($key) {
            return $key . ' = :' . $key;
        }, array_keys($conditions)))
    );

    try {
        $pdo = connect();
        $stmt = $pdo->prepare($sql);
        foreach ($conditions as $key => $value) {
            $stmt->bindValue(':' . $key, $value);
        }
        return $stmt->execute();
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage(), (int) $e->getCode());
    }
}

/* Exemplo de uso
insert('your_table', [
    'column1' => 'value1',
    'column2' => 'value2',
]);

$rows = select('your_table', [
    'column1' => 'value1',
]);

update('your_table', [
    'column1' => 'new_value1',
    'column2' => 'new_value2',
], [
    'column1' => 'value1',
]);

delete('your_table', [
    'column1' => 'new_value1',
]);
*/
?>
