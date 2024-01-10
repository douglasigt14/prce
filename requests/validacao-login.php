<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario_bd = "admin";
    $senha_bd = md5("@Admin159");

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    if ($username === $usuario_bd && $password === $senha_bd) {
        $_SESSION['user_authenticated'] = true;
        header("Location: /sobre");
        exit;
    } else {
        // Credenciais inválidas
        header("Location: /login");
        exit;
    }
} else {
    // Redireciona caso alguém tente acessar este script diretamente sem um POST
    header("Location: /login");
    exit;
}
?>



