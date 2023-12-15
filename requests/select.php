<?php

require_once '../database/Database.php';


$table = $_GET['table'];

$id = $_GET['id'] ?? null;

$pdo = new Database();

 $rows = $id ? $pdo->select($table, ["id" => $id] ) : $pdo->select($table);

echo json_encode($rows);