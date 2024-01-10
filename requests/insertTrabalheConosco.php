<?php

include_once 'database.php';

$rota = $_POST["rota"] ?? "";
$dir = $_POST['dir'] ?? "/admin/uploads";


$payloadSobre = [];


    $payloadSobre['titulo'] =   $_POST['titulo'];
    $payloadSobre['texto'] =   $_POST['texto'];
    $payloadSobre['botao_texto'] =   $_POST['botao-texto'];
    $payloadSobre['botao_link'] =   $_POST['botao-link'];

if(isset($_FILES['capa']) && $_FILES['capa']['name'] != ""){
    $payloadSobre['capa'] = uploadImg($_FILES['capa'], $dir);
}

$rows = update("trabalhe_conosco",$payloadSobre, [ "id" => 1]);

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