<?php

include_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRC Empreendimentos</title>
    <link rel="stylesheet" href="<?= Functions::urlBase('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= Functions::urlBase('assets/owlcarousel/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= Functions::urlBase('assets/owlcarousel/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= Functions::urlBase('assets/circular-progress/progresscircle.css') ?>">
    <link rel="stylesheet" href="<?= Functions::urlBase('style.css'); ?>">

</head>

<body class="bg-primary">

    <nav class="navbar navbar-expand-md fixed-top" id="menuPrincipal">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img id="logoMenu">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a href="<?= Functions::urlBase(); ?>"
                            class="nav-link text-decoration-none text-white px-2 <?= ($_SESSION['currentPage'] == 'home') ? 'active' : ''; ?>"><span>Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Functions::urlBase('sobre'); ?>"
                            class="nav-link text-decoration-none text-white px-2 <?= ($_SESSION['currentPage'] == 'sobre') ? 'active' : ''; ?>"><span>Sobre</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Functions::urlBase('empreendimentos'); ?>"
                            class="nav-link text-decoration-none text-white px-2 <?= ($_SESSION['currentPage'] == 'empreendimentos') ? 'active' : ''; ?>"><span>Empreendimentos</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Functions::urlBase('contato'); ?>"
                            class="nav-link text-decoration-none text-white px-2 <?= ($_SESSION['currentPage'] == 'contato') ? 'active' : ''; ?>"><span>Contato</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Functions::urlBase('trabalheConosco'); ?>"
                            class="nav-link text-decoration-none text-white px-2 <?= ($_SESSION['currentPage'] == 'trabalheConosco') ? 'active' : ''; ?>"><span>Trabalhe
                                Conosco</span></a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a id="link-portal-cliente" class="text-decoration-none text-white">
                        Portal do cliente <img src="<?= Functions::urlBase('assets/icons/portalCliente.svg'); ?>"
                            class="ms-4" id="iconPortalCliente">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <script>
    let siteRoot = window.location.origin;
    const urlhead = siteRoot+'/requests/select.php?table=header';

    fetch(urlhead)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                console.log(data);
                document.querySelector("#logoMenu").src = siteRoot + "/" +data[0]['logo'];
                document.querySelector("#link-portal-cliente").href = data[0]['link_portal_cliente'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });
</script>