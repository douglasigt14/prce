<?php 

include_once 'functions.php';

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
            <a href="<?= Functions::urlBase('admin'); ?>" class="nav-link link-body-emphasis">
              <i class="fa-solid fa-house me-1"></i>
              Home
            </a>
          </li>
          <li>
            <a href="<?= Functions::urlBase('admin/sobre'); ?>" class="nav-link active link-body-emphasis">
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
        <form action="<?= Functions::urlBase('upload.php'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="rota" value="/admin/sobre">
          <div class="col-md-12">
              <div class="row" id="selecaoCapa">
                <label class="form-label fw-bold">Capa</label>
                <div class="w-100 mt-4 mb-4">
                      Selecione o arquivo: <input type="file" name="arquivo" />
                      <input type="hidden" name="dir" value="/sobre/capa">
                </div>
                <?= Functions::bibliotecaImages('/sobre/capa/'); ?>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                  <div class="col-6">
                    <label for="titulo1" class="form-label fw-bold">Titulo 1</label>
                    <input type="text" class="form-control" id="titulo1">
                  </div>   
                  <div class="col-6">
                      <label for="texto1" class="form-label fw-bold">Texto 1</label>
                      <textarea class="form-control" id="texto1" rows="3"></textarea>
                  </div>             
                </div>
              

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-12">
                  <label for="texto2" class="form-label fw-bold">Texto 2</label>
                  <input type="text" class="form-control" id="texto2">
                </div>      
              </div>

              <div class="row g-3 mb-3 align-items-center">  
                <div class="col-12 align-items-center">
                  <label for="#" class="form-label fw-bold">Vídeo:</label>
                  <button type="button" class="btn btn-primary m-0 ms-1 w-auto" data-bs-toggle="modal" data-bs-target="#modalVideo">Selecionar novo vídeo</button>              
                </div>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-12">
                    <label for="titulo2" class="form-label fw-bold">Titulo 2</label>
                    <input type="text" class="form-control" id="titulo2">
                  </div>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-3">
                  <label for="texto3" class="form-label fw-bold">Texto 3</label>
                  <input type="text" class="form-control" id="texto3">
                </div> 
                <div class="col-3">
                  <label for="texto4" class="form-label fw-bold">Texto 4</label>
                  <input type="text" class="form-control" id="texto4">
                </div> 
                <div class="col-3">
                  <label for="texto5" class="form-label fw-bold">Texto 5</label>
                  <input type="text" class="form-control" id="texto5">
                </div> 
                <div class="col-3">
                  <label for="texto6" class="form-label fw-bold">Texto 6</label>
                  <input type="text" class="form-control" id="texto6">
                </div> 
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-12">
                  <label for="texto7" class="form-label fw-bold">Texto 7</label>
                  <textarea class="form-control" id="texto7" rows="3"></textarea>
                </div> 
              </div>

              <div class="row" id="selecaoImagemDiferenciais">
                <label class="form-label fw-bold">Imagem Diferenciais</label>
                <?= Functions::bibliotecaImages(); ?>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="titulo3" class="form-label fw-bold">Titulo 3</label>
                  <input type="text" class="form-control" id="titulo3">
                </div>  
                <div class="col-6">
                  <label for="texto8" class="form-label fw-bold">Texto 8</label>
                  <textarea class="form-control" id="texto8" rows="3"></textarea>
                </div>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial1" class="form-label fw-bold">Titulo Diferencial 1</label>
                  <input type="text" class="form-control" id="tituloDiferencial1">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial1" class="form-label fw-bold">Texto Diferencial 1</label>
                  <textarea class="form-control" id="textoDiferencial1" rows="3"></textarea>
                </div>  
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial2" class="form-label fw-bold">Titulo Diferencial 2</label>
                  <input type="text" class="form-control" id="tituloDiferencial2">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial2" class="form-label fw-bold">Texto Diferencial 2</label>
                  <textarea class="form-control" id="textoDiferencial2" rows="3"></textarea>
                </div>  
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial3" class="form-label fw-bold">Titulo Diferencial 3</label>
                  <input type="text" class="form-control" id="tituloDiferencial3">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial3" class="form-label fw-bold">Texto Diferencial 3</label>
                  <textarea class="form-control" id="textoDiferencial3" rows="3"></textarea>
                </div>  
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial4" class="form-label fw-bold">Titulo Diferencial 4</label>
                  <input type="text" class="form-control" id="tituloDiferencial4">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial4" class="form-label fw-bold">Texto Diferencial 4</label>
                  <textarea class="form-control" id="textoDiferencial4" rows="3"></textarea>
                </div>  
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial5" class="form-label fw-bold">Titulo Diferencial 5</label>
                  <input type="text" class="form-control" id="tituloDiferencial5">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial5" class="form-label fw-bold">Texto Diferencial 5</label>
                  <textarea class="form-control" id="textoDiferencial5" rows="3"></textarea>
                </div>  
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="tituloDiferencial6" class="form-label fw-bold">Titulo Diferencial 6</label>
                  <input type="text" class="form-control" id="tituloDiferencial6">
                </div> 
                <div class="col-6">
                  <label for="textoDiferencial6" class="form-label fw-bold">Texto Diferencial 6</label>
                  <textarea class="form-control" id="textoDiferencial6" rows="3"></textarea>
                </div>  
              </div>

              <div class="row" id="selecaoImagemFinal">
                <label class="form-label fw-bold">Imagem</label>
                <?= Functions::bibliotecaImages(); ?>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                  <label for="titulo4" class="form-label fw-bold">Titulo 4</label>
                  <input type="text" class="form-control" id="titulo4">
                </div>  
                <div class="col-6">
                  <label for="texto9" class="form-label fw-bold">Texto 9</label>
                  <input type="text" class="form-control" id="texto9">
                </div>
                <div class="col-6">
                  <label for="texto10" class="form-label fw-bold">Texto 10</label>
                  <input type="text" class="form-control" id="texto10">
                </div>
                <div class="col-6">
                  <label for="texto11" class="form-label fw-bold">Texto 11</label>
                  <textarea class="form-control" id="texto11" rows="3"></textarea>
                </div>
              </div>

              <div class="row g-3 mb-3 align-items-center">
                <div class="col-12">
                  <button type="submit" class="btn btn-success btn-lg w-100">Salvar</button>
                </div>
              </div>

            </div>

          </div>
      
        </div>
      </div>
    </div>

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
            </form>
          </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/fontawesome/js/all.min.js'); ?>"></script>


    <script>

    let root = window.location.origin;
    const url1 = root+'/requests/select.php?table=sobre';

    // Realiza a solicitação usando o fetch
    fetch(url1)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                //document.querySelector("#capa").innerHTML = data[0]['capa'];
                console.log(data);
                for (let i = 1; i <= 4; i++) {//3
                    document.querySelector("#titulo" + i).value = data[0]['titulo' + i];
                }

                for (let i = 1; i <= 8; i++) {//11
                    document.querySelector("#texto" + i).value = data[0]['texto' + i];
                }

                // document.querySelector("#foto-capa").src = data[0]['capa'];
                // document.querySelector("#imagem-diferenciais").src = data[0]['imagem1'];
                // document.querySelector("#foto-processos").src = data[0]['imagem2'];


                // const config = {
                //     autoplay: false,
                //     ui: {
                //         image: data[0]['capa'],
                //     },
                //     sources: [
                //         {
                //             type: "mp4",
                //             src: data[0]['video'],
                //         }
                //     ],
                // };
                // const element = document.querySelector('#videoSobre');
                // const player = IndigoPlayer.init(element, config);
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

    const url2 = root+'/requests/select.php?table=sobre_diferenciais';

    fetch(url2)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                // for (let i = 0; i < 6; i++) {//3
                //     document.querySelector("#titulo_diferencial" + (i + 1)).value = data[i]['titulo'];
                //     document.querySelector("#texto_diferencial" + (i + 1)).value = data[i]['texto'];
                // }

            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

</script>

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
