<?php

include_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= Functions::urlBase('pages\css\adminLogin.css'); ?>">
    <link rel="stylesheet" href="<?= Functions::urlBase('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <title>Login</title>
    <style>
        
    </style>
</head>

<body>
    <div class="all">
        <div class="login-container">
            <div class="logo">
                <img src="<?= Functions::urlBase('assets/icons/logoPRC2.svg'); ?>">
            </div>
            <form action="<?= Functions::urlBase('requests/validacao-login.php'); ?>" method="post" class="login-form">
                <label for="username" class="label">Username:</label>
                <input type="text" id="username" class="input form-control" name="username" placeholder="Username" required>

                <label for="password" class="label">Password:</label>
                <input type="password" id="password" class="input form-control" name="password" placeholder="Password" required>

                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </div>

</body>

</html>