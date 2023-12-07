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
            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(233, 233, 233, 1) 50%, rgba(255, 255, 255, 1) 100%);
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
            z-index: 1000;
        }

        .logo img {
            width: 11rem;
            margin-bottom: 3rem;
        }

        .login-form {}


        label {
            display: block;
            margin-bottom: 8px;
            color: #666666;
        }

        input {
            width: 100%;
            height: 2rem;
            margin-bottom: 1rem;
            border: 0.12rem solid #cccccc;
            border-radius: 3px;
        }

        input::placeholder {
            padding-left: 0.2rem;
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
            <div class="logo">
                <img src="<?= Functions::urlBase('assets/icons/logoPRC2.svg'); ?>">
            </div>
            <form class="login-form">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </div>

</body>

</html>