<?php

require_once '../database/Database.php';


$table = $_GET['table'];

$pdo = new Database();

$rows = $pdo->select($table);

echo json_encode($rows);