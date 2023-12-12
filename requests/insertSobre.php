<?php

require_once '../database/Database.php';

$rota = $_POST["rota"] ?? "";
$dir = $_POST['dir'] ?? "/admin/uploads";

$pdo = new Database();

$payloadSobre = [];

for ($i=1; $i <= 4; $i++) { 
    $payloadSobre['titulo'.$i] =   $_POST['titulo'.$i];
}

for ($i=1; $i <= 8; $i++) { 
    $payloadSobre['texto'.$i] =   $_POST['texto'.$i];
}

if(isset($_FILES['foto-capa']) && $_FILES['foto-capa']['name'] != ""){
    $payloadSobre['capa'] = uploadImg($_FILES['foto-capa'], $dir);
}

if(isset($_FILES['foto-diferenciais'])  && $_FILES['foto-diferenciais']['name'] != "" ){
    
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


function uploadImg($file, $dirP){
    $baseDir = "../assets" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
    $uploadDir = $dirP;

    // Verifica se a pasta de destino existe, se não, cria-a
    $dir = $baseDir . $uploadDir;
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    if (move_uploaded_file($file["tmp_name"], "$dir/" . $file["name"])) {
        $dir = str_replace("../","",$dir);
        return $dir.DIRECTORY_SEPARATOR.$file['name'];
    } else {
       return "Erro, o arquivo não pode ser enviado.<br>";
    }   
}



