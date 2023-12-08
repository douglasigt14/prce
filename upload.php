<?php 

$baseDir = "assets" . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR;
$uploadDir = $_POST["dir"] ?? "";
$rota = $_POST["rota"] ?? "";

// Verifica se a pasta de destino existe, se não, cria-a
$dir = $baseDir . $uploadDir;
if (!is_dir($dir)) {
    mkdir($dir, 0777, true);
}

// Recebendo o arquivo multipart
$file = $_FILES["arquivo"];

$urlBase = (!empty($_SERVER['HTTPS']))  ? 'https://' . $_SERVER['SERVER_NAME'] : 'http://' . $_SERVER['SERVER_NAME'];

// Move o arquivo da pasta temporária de upload para a pasta de destino
if (move_uploaded_file($file["tmp_name"], "$dir/" . $file["name"])) {
		header("location: " .$rota);
} else {
    echo "Erro, o arquivo não pode ser enviado.<br>";
    echo "<a href='" . $urlBase . "/admin/uploads" . $uploadDir . "'>Tente novamente</a>";
}     
