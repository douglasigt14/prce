<?php


include_once 'database.php';


$table = $_POST['table'];
$id = $_POST['id'];
$rota = $_POST["rota"] ?? "";

delete($table, ["id" => $id]);

header("location: " .$rota);