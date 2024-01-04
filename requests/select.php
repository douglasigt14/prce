<?php


include_once 'database.php';


$table = $_GET['table'];
$id = $_GET['id'] ?? null;

$rows = $id ? select($table, ["id" => $id]) : select($table);
echo json_encode($rows);