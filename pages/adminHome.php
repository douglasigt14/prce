<?php require_once __DIR__ . '/headerAdmin.php'; ?>

      <div class="container p-3">
        <div class="row mt-5">
          <div class="col-md-12">
            
            <div class="form mb-3 mt-3 w-100 d-flex align-items-center justify-content-center">
              <h4>Vídeo Principal:</h2>
              <button type="button" class="btn btn-primary m-0 ms-3" data-bs-toggle="modal" data-bs-target="#modalVideo">Selecionar novo vídeo</button>              
              <div class="col-2"></div>
              <video width="320" height="240" controls>
                <source id="video" type="video/mp4">
              </video>
              <div class="col-2"></div>
            </div>

            <hr class="mt-5 mb-5">

            <div class="row g-3 mb-3 align-items-center">
                <div class="col-6">
                        <label for="titulo1" class="form-label fw-bold">Titulo 1</label>
                        <input type="text" name="titulo1" class="form-control" id="titulo1">
                    </div>
                    <div class="col-6">
                        <label for="titulo2" class="form-label fw-bold">Titulo 1</label>
                        <input type="text" name="titulo2" class="form-control" id="titulo2">
                    </div>
                </div>

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

    const root = window.location.origin;
    const url1 = root + `/requests/select.php?table=home_data`;

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
                console.log(data);
                document.querySelector("#video").src = root + "/" + data[0]['video'];
                document.querySelector("#titulo1").value = data[0]['titulo1'];
                document.querySelector("#titulo2").value = data[0]['titulo2'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

    // const url2 = 'requests/select.php?table=comentarios';

    // fetch(url2)
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error(`Erro na solicitação: ${response.statusText}`);
    //         }
    //         return response.json();
    //     })
    //     .then(data => {
    //         if (data) {
    //             console.log(data);
    //             //document.querySelector("#capa").innerHTML = data[0]['capa'];
    //             for (let i = 0; i <= 3; i++) {//3
    //                 document.querySelector("#texto" + (i + 1)).innerHTML = data[i]['texto'];
    //                 document.querySelector("#imagem" + (i + 1)).src = data[i]['imagem'];
    //                 document.querySelector("#nome" + (i + 1)).innerHTML = data[i]['nome'];
    //                 document.querySelector("#empreendimento" + (i + 1)).innerHTML = data[i]['nome_empreendimento'];
    //             }

    //         }
    //     })
    //     .catch(error => {
    //         // Manipula erros durante a solicitação
    //         console.error('Erro durante a solicitação:', error);
    //     });

    </script>
  
  </body>
</html>
