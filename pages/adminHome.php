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
            <a href="<?= Functions::urlBase('admin'); ?>" class="nav-link active link-body-emphasis">
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
            <a href="<?= Functions::urlBase('admin/uploads'); ?>" class="nav-link link-body-emphasis">
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
            
            <div class="form mb-3 mt-3 w-100 d-flex align-items-center justify-content-center">
              <h4>Vídeo Principal:</h2>
              <button type="button" class="btn btn-primary m-0 ms-3" data-bs-toggle="modal" data-bs-target="#modalVideo">Selecionar novo vídeo</button>              
            </div>

            <hr class="mt-5 mb-5">

            <div class="w-100 d-flex align-items-center justify-content-center">
              <h4 class="w-50">Comentários</h2>
              <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalComentario">Adicionar novo Comentário</button>
            </div>

            <div class="table-responsive mt-1">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Empreendimento</th>
                    <th scope="col">Comentário</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                  <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
            </div>
          
          </div>
        </div>
      </div>

    </main>

    <!-- Modal Video -->
    <div class="modal" tabindex="-1" id="modalVideo">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Biblioteca de vídeos</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                
              <?= Functions::bibliotecaVideoHome(); ?>         

              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnSalvarBDVideo">Salvar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Comentário -->
    <div class="modal" tabindex="-1" id="modalComentario">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Cadastrar comentário</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">

              <div class="row">
                <label class="form-label fw-bold">Foto de Perfil</label>
                <?= Functions::bibliotecaImages(); ?>         
              </div>

              <div class="row g-3 align-items-center">
                <div class="col-6">
                  <label for="nomeComentario" class="form-label fw-bold">Nome</label>
                  <input type="text" class="form-control" id="nomeComentario">
                </div>
                <div class="col-6">
                  <label for="selectEmpreendimento" class="form-label fw-bold">Empreendimento</label>
                  <select class="form-select" id="selectEmpreendimento">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="textComentario" class="form-label fw-bold">Comentário</label>
                  <textarea class="form-control" id="textComentario" rows="3"></textarea>
                </div>              
              </div>

            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
          </div>
        </div>
      </div>
    </div>
    
    
    <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/fontawesome/js/all.min.js'); ?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      $(".btnSelecaoVideoHome").click(function(e) {
        divArquivo = $(this).parent().parent().parent();
        let radio = divArquivo.find('input[name="radioVideo"]');

        $(".selecaoVideoHome").each(function() {
          $(this).css('background-color', 'transparent');
        });
              
        radio.prop("checked", true);
        if (radio.is(":checked")) {
          divArquivo.css('background-color', 'rgba(0,0,0,0.3');
        }

      });

      $(".btnSelecaoImagem").click(function(e) {
        divArquivo = $(this).parent().parent().parent();
        let radio = divArquivo.find('input[name="radioImagem"]');

        $(".selecaoImagem").each(function() {
          $(this).css('background-color', 'transparent');
        });
              
        radio.prop("checked", true);
        if (radio.is(":checked")) {
          divArquivo.css('background-color', 'rgba(0,0,0,0.3');
        }

      });

      $("#btnSalvarBDVideo").click(function() {
        let radio = $(".selecaoVideoHome").find('input[name="radioVideo"]');
        let nameVideo = null;
      
        radio.each(function() {
          if ($(this).is(":checked")) {
            nameVideo = $(this).attr('data-nameVideo');

            $.ajax({
              url: "<?= Functions::urlBase('requests/requestHome.php'); ?>",
              method: "POST",
              data: {
                idActivity: 1,
                nameVideo: nameVideo
              },
              success: function (data) {
                if (data.status) {
                  alert("Vídeo alterado!");
                  $("#modalVideo").css("display", "none");
                  $(".modal-backdrop").css("display", "none");
                } else {
                  alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
                }
              }, error: function (request, status, error) {
                alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
              }
            });

          }
        });
      });

      $("#btnSalvarBDComentario").click(function() {
        let radio = $(".selecaoImagem").find('input[name="radioImagem"]');
        let nameImagem = null;
        radio.each(function() {
          if ($(this).is(":checked")) {
            nameImagem= $(this).attr('data-nameImagem');
          }
        });
        var nome = $("#nomeComentario").val();
        var empreendimento = $("#selectEmpreendimento option:selected").val();
        var comentario = $("#textComentario").val();

        console.log(nameImagem+"\n"+nome+"\n"+empreendimento+"\n"+comentario);
          
      });
      
    });  
    </script>
  
  </body>
</html>
