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

$rows = $pdo->update("sobre",$payloadSobre, [ "id" => 1]);


for ($i=1; $i <= 6; $i++) { 
    $payloadDiferenciais = [
        "titulo" =>  $_POST['titulo_diferencial'.$i],
        "texto" =>  $_POST['texto_diferencial'.$i]
    ]; 

    $rows = $pdo->update("sobre_diferenciais",$payloadDiferenciais, ['id' => $i] );
}






header("location: " .$rota);

