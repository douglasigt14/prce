<?php

$urlBase = (!empty($_SERVER['HTTPS']))  ? 'https://'.$_SERVER['SERVER_NAME'] : 'http://'.$_SERVER['SERVER_NAME'];

$fileName = $_GET["fileName"];

unlink(".." . DIRECTORY_SEPARATOR  . "assets" . DIRECTORY_SEPARATOR  . "uploads" . DIRECTORY_SEPARATOR . $fileName);
header("location: " . $urlBase . DIRECTORY_SEPARATOR  . "admin" . DIRECTORY_SEPARATOR  . "uploads");


?>