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
          <li class="nav-item">
            <a href="<?= Functions::urlBase('admin'); ?>" class="nav-link link-body-emphasis">
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
            <a href="#" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-address-book me-1"></i>
              Contato
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-briefcase me-1"></i>
              Trabalhe conosco
            </a>
          </li>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-building me-1"></i>
              Empreendimentos
            </a>
          </li>
          </li>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-sitemap me-1"></i>
              Informações gerais
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/uploads'); ?>" class="nav-link active link-body-emphasis">
              <i class="fa-solid fa-upload"></i>
              Upload
            </a>
          </li>
          <hr>
          <li>
            <a href="#" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-right-from-bracket"></i>
              Sair
            </a>
          </li>
        </ul>
      </div>

      <div class="container p-3">
        <div class="row mt-5">
          <div class="col-md-12">
            
            <div class="form mb-3 mt-3 w-100" >
              <h4>Fazer upload de arquivos para o site</h2>
              <div class="w-100 mt-4">
                <form action="<?= Functions::urlBase('upload.php'); ?>" method="post" enctype="multipart/form-data">
                  Selecione o arquivo: <input type="file" name="arquivo" />
                  <input type="hidden" name="rota" value="/admin/uploads">
                  <input type="submit" value="Enviar">
                </form>
              </div>
              
            </div>

            <hr class="mt-1 mb-5">

            <div class="w-100" >
              
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Arquivo</th>
                      <th scope="col" colspan="2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?= Functions::filesUploaderTable(); ?>
                  </tbody>
                </table>
              </div>

          </div>
        </div>
      </div>

    </main>

    
    
    <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/fontawesome/js/all.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/plupload/js/plupload.full.min.js'); ?>"></script>
    <script type="text/javascript">
    
    </script>
  
  </body>
</html>
