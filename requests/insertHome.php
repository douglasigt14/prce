<?php

require_once '../database/Database.php';

$rota = $_POST["rota"] ?? "";
$dir = $_POST['dir'] ?? "/admin/uploads";

$pdo = new Database();

$payloadSobre = [];

    $payloadSobre['titulo'] =   $_POST['titulo'];

    $payloadSobre['texto'] =   $_POST['texto'];

if(isset($_FILES['video']) && $_FILES['video']['name'] != ""){
    $payloadSobre['video'] = uploadImg($_FILES['video'], $dir);
}

$rows = $pdo->update("homa_data",$payloadSobre, [ "id" => 1]);

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



