<?php

require_once '../database/Database.php';

$username = $_POST['username'];

$password = $_POST['password'];

$pdo = new Database();

