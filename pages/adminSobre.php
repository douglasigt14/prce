<?php require_once __DIR__ . '/headerAdmin.php'; ?>

    <div class="conteiner-principal p-5">
      <div class="row mt-3">
      <h3>Sobre</h3>
        <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post" enctype="multipart/form-data">
          <input type="hidden" name="rota" value="/admin/sobre">
          <input type="hidden" name="dir" value="sobre">
          <div class="col-md-12">
            <div class="row align-items-center mt-4 mb-4" id="selecaoCapa">
                <div class="col-3"></div>
              <div class="col-6">
                <label class="form-label fw-bold">Capa</label> <br>
                <input type="file" class="form-control" name="foto-capa" />
                <img name="capa" id="capa" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center mb-4">
              <div class="col-6">
                <label for="titulo1" class="form-label fw-bold">Titulo 1</label>
                <input type="text" name="titulo1" class="form-control" id="titulo1">
              </div>
              <div class="col-6">
                <label for="texto1" class="form-label fw-bold">Texto 1</label>
                <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
              </div>
            </div>
            <div class="row g-3 mb-3 align-items-center">
              <div class="col-3"></div>
              <div class="col-6 align-items-center">
                <label for="#" class="form-label fw-bold">Vídeo:</label><br>
                <input type="file" class="form-control" name="video" />
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row g-3 mb-3 align-items-center">
              <div class="col-4">
                <label for="titulo2" class="form-label fw-bold">Titulo 2</label>
                <input type="text" name="titulo2" class="form-control" id="titulo2">
              </div>
              <div class="col-4">
                <label for="texto2" class="form-label fw-bold">Texto 2</label>
                <input type="text" name="texto2" class="form-control" id="texto2">
              </div>
              <div class="col-4">
                <label for="texto3" class="form-label fw-bold">Texto 3</label>
                <textarea name="texto3" class="form-control" id="texto3" rows="3"></textarea>
              </div>
            </div>

            <div class="row g-3 mb-3 align-items-start">
              <div class="col-5" id="selecaoImagemDiferenciais">
                <label class="form-label fw-bold">Imagem Diferenciais</label>
                <div class="w-100 mt-4 mb-4">
                  <input type="file" class="form-control" name="foto-diferenciais" />
                  <img  id="foto-diferenciais" class="img-diferenciais img-fluid mt-3">
                </div>
              </div>
              <div class="col-7">
                <label for="titulo3" class="form-label fw-bold">Titulo 3</label>
                <input name="titulo3" type="text" class="form-control" id="titulo3">
                <br>
                <label for="texto4" class="form-label fw-bold">Texto 4</label>
                <textarea name="texto4" class="form-control" id="texto4" rows="3"></textarea><br>

                
                <?php 
                  for ($i=1; $i <= 6; $i++) { 
                ?>
                <div class="row g-3 mb-3 align-items-center">
                  <div class="col-6">
                    <label for="titulo_diferencial<?php echo $i?>" class="form-label fw-bold">Titulo Diferencial <?php echo $i?></label>
                    <input name="titulo_diferencial<?php echo $i?>" type="text" class="form-control" id="titulo_diferencial<?php echo $i?>">
                  </div>
                  <div class="col-6">
                    <label for="texto_diferencial1" class="form-label fw-bold">Texto Diferencial <?php echo $i?></label>
                    <textarea name="texto_diferencial<?php echo $i?>" class="form-control" id="texto_diferencial<?php echo $i?>" rows="3"></textarea>
                  </div>
                </div>
                <?php 
                  }
                ?>
              </div>
            </div>


            


            <div class="row" id="selecaoImagemFinal">
              <div class="col-3"></div>
              <div class="col-6">
                <label class="form-label fw-bold">Imagem</label>
                <input type="file" class="form-control" name="foto-processos" />
                <img  id="foto-processos" class="img-diferenciais img-fluid mt-3">
              </div>
              <div class="col-3"></div>
              
            </div>

            <div class="row g-3 mb-3 mt-3 align-items-center">
              <div class="col-6">
                <label for="titulo4" class="form-label fw-bold">Titulo 4</label>
                <input name="titulo4" type="text" class="form-control" id="titulo4"><br>

                <label for="texto5" class="form-label fw-bold">Texto 5</label>
                <input name="texto5" type="text" class="form-control" id="texto5"><br>

                <label for="texto6" class="form-label fw-bold">Texto 6</label>
                <input name="texto6" type="text" class="form-control" id="texto6">
              </div>
              <div class="col-6">
                <label for="texto7" class="form-label fw-bold">Texto 7</label>
                <textarea name="texto7" class="form-control" id="texto7" rows="3"></textarea><br>

                <label for="texto8" class="form-label fw-bold">Texto 8</label>
                <textarea name="texto8" class="form-control" id="texto8" rows="3"></textarea>
              </div>
            </div>

            <div class="row g-3 mb-3 align-items-center">
              <div class="col-12">

              </div>
            </div>



          </div>

      
       
        </div>

    </div>
    </div>
    </div>

    <footer class="fixed-bottom  text-light text-center p-3">
        <div class="row">
          <div class="col-10"></div>
          <div class="col-2">
                  <button type="submit" class="btn btn-save btn-success">Salvar</button>
              </form>
          </div>
          
        </div>
  </footer>


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

    <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/fontawesome/js/all.min.js'); ?>"></script>

    <script>
      const siteRoot = window.location.origin;
      const url = `${siteRoot}/requests/select.php?table=sobre`;
          fetch(url)
          .then(response => {
              if (!response.ok) {
                  throw new Error(`Erro na solicitação: ${response.statusText}`);
              }
              return response.json();
          })
          .then(data => {
              if(data){
                  for (let i = 1; i <= 4; i++) {//3
                      document.querySelector("#titulo"+i).value = data[0]['titulo'+i];
                  }

                  for (let i = 1; i <= 8; i++) {//11
                        document.querySelector("#texto"+i).value = data[0]['texto'+i];
                  }

                  document.querySelector("#capa").src = siteRoot + "/" + data[0]['capa'];
                  document.querySelector("#foto-diferenciais").src = siteRoot + "/" +data[0]['imagem1'];
                  document.querySelector("#foto-processos").src = siteRoot + "/" +data[0]['imagem2'];


              }
          })
          .catch(error => {
              console.error('Erro durante a solicitação:', error);
          });


        const url2 = `${siteRoot}/requests/select.php?table=sobre_diferenciais`;

        fetch(url2)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {

                //document.querySelector("#capa").innerHTML = data[0]['capa'];
                for (let i = 0; i < 6; i++) {//3
                    document.querySelector("#titulo_diferencial" + (i + 1)).value = data[i]['titulo'];
                    document.querySelector("#texto_diferencial" + (i + 1)).value = data[i]['texto'];
                }

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
                success: function(data) {
                  if (data.status) {
                    alert("Vídeo alterado!");
                    $("#modalVideo").css("display", "none");
                    $(".modal-backdrop").css("display", "none");
                  } else {
                    alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
                  }
                },
                error: function(request, status, error) {
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
              nameImagem = $(this).attr('data-nameImagem');
            }
          });
          var nome = $("#nomeComentario").val();
          var empreendimento = $("#selectEmpreendimento option:selected").val();
          var comentario = $("#textComentario").val();


        });

      });
    </script>

</body>

</html>