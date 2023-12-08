<?php

require_once '../database/Database.php';

$rota = $_POST["rota"] ?? "";


$pdo = new Database();

$payloadSobre = [];

for ($i=1; $i <= 4; $i++) { 
    $payloadSobre['titulo'.$i] =   $_POST['titulo'.$i];
}

for ($i=1; $i <= 8; $i++) { 
    $payloadSobre['texto'.$i] =   $_POST['texto'.$i];
}

$condicaSobre = [
    "id" => 1
];

$rows = $pdo->update("sobre",$payloadSobre,$condicaSobre);


header("location: " .$rota);

