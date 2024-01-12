<?php

include_once 'functions.php';

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin · PRC Empreendimentos</title>
  <link href="<?= Functions::urlBase('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?= Functions::urlBase('assets/fontawesome/css/all.min.css'); ?>" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico">
  <!-- Custom styles for this template -->
  <link href="<?= Functions::urlBase('pages/css/admin.css'); ?>" rel="stylesheet">

</head>

<body>
  <main class="d-flex flex-nowrap">

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;" id="menuHome">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="<?= Functions::urlBase('assets/icons/logoPRC2.svg'); ?>" class="w-100" id="logo">
      </a>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="<?= Functions::urlBase('admin/home'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-house me-1"></i>
              Home
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/sobre'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-circle-info me-1"></i>
              Sobre
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/contato'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-address-book me-1"></i>
              Contato
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/trabalheconosco'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-briefcase me-1"></i>
              Trabalhe conosco
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/empreendimentos'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-building me-1"></i>
              Empreendimentos
            </a>
          </li>
          <li>
          <a href="<?= Functions::urlBase('admin/empreendimentos/detalhes'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-building me-1"></i>
              Empreendimentos Detalhes
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/info'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-sitemap me-1"></i>
              Informações gerais
            </a>
          </li>
          <li>
          <a href="<?= Functions::urlBase('admin/formularios'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-building me-1"></i>
              Formulários
            </a>
          </li>
          <hr>
          <li>
            <a href="<?= Functions::urlBase('logout'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-right-from-bracket"></i>
              Sair
            </a>
          </li>
        </ul>
<<<<<<< HEAD
    </div>
=======
    </div>

    <script>
        navLinks = document.querySelectorAll('.nav-link');

        var urlAtual = window.location.href;

        navLinks.forEach(function(navLink) {
          if (urlAtual.includes(navLink.getAttribute('href'))) {
              navLink.classList.add('active');
          }
        });
    </script>
>>>>>>> 54efc79fa25ae98d1d3ce6d45e599963e7029dc4
