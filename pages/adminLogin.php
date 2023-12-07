<?php

include_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= Functions::urlBase('css/adminLogin.css'); ?>"> -->
    <title>Login Administrador</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .all {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            height: 25rem;
            width: 20rem;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .login-form {
            
        }

        h2 {
            text-align: center;
            color: #333333;
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #666666;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #cccccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="all">
        <div class="login-container">
        <h2>Admin Login</h2>
            <form class="login-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>