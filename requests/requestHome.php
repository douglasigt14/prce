<?php

require_once '../database/Database.php';

$pdo = new Database();

$rows = $pdo->select('home');

$idActivity = $_POST['idActivity'];

header("Content-type: application/json; charset=utf-8");

if ($idActivity == 1) {
    $response = null;
    $nameVideo = $_POST['nameVideo'];

    if (!empty($rows)) {
        $response = $pdo->update('home', ['video' => $nameVideo], ['idPagina' => 1]);
    } else {
        $response = $pdo->insert('home', ['video' => $nameVideo,'idPagina' => 1]);
    }
    
    $status = $response ? true : false;
    echo json_encode(array(
        "status" => $status
    ));
}