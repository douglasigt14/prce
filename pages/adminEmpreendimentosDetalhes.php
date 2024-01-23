<?php require_once __DIR__ . '/headerAdmin.php';

$empreendimentos = $pdo->select("empreendimentos");

?>

<div class="conteiner-principal p-5">
  <div class="row mt-3 w-100">
    <h3>Empreendimentos Detalhes</h3>
    <div class="row align-items-center mt-3 mb-3">
      <div class="col-12">
        <label for="emp">Empreendimento:</label>
        <select class="form-control" id="emp">
          <?php
          foreach ($empreendimentos as $key => $emp) {
            ?>
            <option value="<?php echo $emp['id']; ?>">
              <?php echo $emp['name']; ?>
            </option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>
    <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="rota" value="/admin/sobre">
      <input type="hidden" name="dir" value="sobre">

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-between">
            <h4 class="w-50">Plantas</h4>
            <button type="button" class="btn btn-primary  btn-lg mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalPlantas"><i class="fa fa-plus"></i></button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Varanda ampliada com piscina</td>
                    <td>3 quartos | 1 ou 2 suítes</td>
                    <td>119m²</td>
                    <td>assets/images/slide.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>Varanda</td>
                    <td>3 quartos | 1 ou 2 suítes</td>
                    <td>110m²</td>
                    <td>assets/images/slide.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>Living ampliado</td>
                    <td>3 quartos | 1 ou 2 suítes</td>
                    <td>105m²</td>
                    <td>assets/images/slide.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Apartamentos Decorados</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Imagem</th>
                    <th scope="col">Texto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td>Piscina com deck e piscina natural</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td>Piscina com deck e piscina natural</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td>Piscina com deck e piscina natural</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Conheça a Região</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Subtitulo</th>
                    <th scope="col">texto</th>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Conheça<br>a região</td>
                    <td>ACADEMIAS MODERNAS E TECNOLÓGICAS PARA SEUS TREINOS</td>
                    <td>Líder em seu segmento na América Latina, a Smart Fit é uma das academias mais modernas e
                      democráticas para você treinar e colocar a saúde em dia.</td>
                    <td>assets/images/conhecaRegiao.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>Conheça<br>a região</td>
                    <td>ACADEMIAS MODERNAS E TECNOLÓGICAS PARA SEUS TREINOS</td>
                    <td>Líder em seu segmento na América Latina, a Smart Fit é uma das academias mais modernas e
                      democráticas para você treinar e colocar a saúde em dia.</td>
                    <td>assets/images/conhecaRegiao.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>Conheça<br>a região</td>
                    <td>ACADEMIAS MODERNAS E TECNOLÓGICAS PARA SEUS TREINOS</td>
                    <td>Líder em seu segmento na América Latina, a Smart Fit é uma das academias mais modernas e
                      democráticas para você treinar e colocar a saúde em dia.</td>
                    <td>assets/images/conhecaRegiao.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Areas Comuns</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Equipe</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Imagem</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets/images/projeto.jpg</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Diferenciais</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Ícone</th>
                    <th scope="col">Texto</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>assets\icons\ar-condicionado.svg</td>
                    <td>Infraestrutura para ar condicionado</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal" tabindex="-1" id="modalPlantas">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Planta</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="rota" value="/admin/sobre">
            <input type="hidden" name="dir" value="sobre">
            <div class="row align-items-center mt-4 mb-4">
              <div class="col-3"></div>
              <div class="col-6">
                <label class="form-label fw-bold">Imagem</label> <br>
                <input type="file" class="form-control" name="imagem-carrousel" />
                <img name="imagem" id="imagem-carrousel" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-6">
                <label for="tamanho" class="form-label fw-bold">Tamanho</label>
                <input type="text" name="tamanho" class="form-control" id="tamanho">
              </div>
              <div class="col-6">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-6">
                <label for="descricao" class="form-label fw-bold">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao">
              </div>
              <div class="col-6">
                <label for="emp">Empreendimento:</label>
                <select class="form-control" id="emp">
                  <?php
                  foreach ($empreendimentos as $key => $emp) {
                    ?>
                    <option value="<?php echo $emp['id']; ?>">
                      <?php echo $emp['name']; ?>
                    </option>
                    <?php
                  }
                  ?>
                </select>
              </div>

            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <di>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
      </di>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalPlantas">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Planta</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="rota" value="/admin/sobre">
            <input type="hidden" name="dir" value="sobre">
            <div class="row align-items-center mt-4 mb-4">
              <div class="col-3"></div>
              <div class="col-6">
                <label class="form-label fw-bold">Imagem</label> <br>
                <input type="file" class="form-control" name="imagem-carrousel" />
                <img name="imagem" id="imagem-carrousel" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-6">
                <label for="tamanho" class="form-label fw-bold">Tamanho</label>
                <input type="text" name="tamanho" class="form-control" id="tamanho">
              </div>
              <div class="col-6">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome">
              </div>
            </div>

            <div class="row align-items-center">
              <div class="col-6">
                <label for="descricao" class="form-label fw-bold">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao">
              </div>
              <div class="col-6">
                <label for="emp">Empreendimento:</label>
                <select class="form-control" id="emp">
                  <?php
                  foreach ($empreendimentos as $key => $emp) {
                    ?>
                    <option value="<?php echo $emp['id']; ?>">
                      <?php echo $emp['name']; ?>
                    </option>
                    <?php
                  }
                  ?>
                </select>
              </div>

            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <di>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
      </di>
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
  // const siteRoot = window.location.origin;
  // const url = `${siteRoot}/requests/select.php?table=sobre`;
  // fetch(url)
  //   .then(response => {
  //     if (!response.ok) {
  //       throw new Error(`Erro na solicitação: ${response.statusText}`);
  //     }
  //     return response.json();
  //   })
  //   .then(data => {
  //     if (data) {
  //       for (let i = 1; i <= 4; i++) {//3
  //         document.querySelector("#titulo" + i).value = data[0]['titulo' + i];
  //       }

  //       for (let i = 1; i <= 8; i++) {//11
  //         document.querySelector("#texto" + i).value = data[0]['texto' + i];
  //       }

  //       document.querySelector("#capa").src = siteRoot + "/" + data[0]['capa'];
  //       document.querySelector("#foto-diferenciais").src = siteRoot + "/" + data[0]['imagem1'];
  //       document.querySelector("#foto-processos").src = siteRoot + "/" + data[0]['imagem2'];


  //     }
  //   })
  //   .catch(error => {
  //     console.error('Erro durante a solicitação:', error);
  //   });


  // const url2 = `${siteRoot}/requests/select.php?table=sobre_diferenciais`;

  // fetch(url2)
  //   .then(response => {
  //     if (!response.ok) {
  //       throw new Error(`Erro na solicitação: ${response.statusText}`);
  //     }
  //     return response.json();
  //   })
  //   .then(data => {
  //     if (data) {

  //       //document.querySelector("#capa").innerHTML = data[0]['capa'];
  //       for (let i = 0; i < 6; i++) {//3
  //         document.querySelector("#titulo_diferencial" + (i + 1)).value = data[i]['titulo'];
  //         document.querySelector("#texto_diferencial" + (i + 1)).value = data[i]['texto'];
  //       }

  //     }
  //   })
  //   .catch(error => {
  //     // Manipula erros durante a solicitação
  //     console.error('Erro durante a solicitação:', error);
  //   });
</script>

<script type="text/javascript">
  $(document).ready(function () {

    $(".btnSelecaoVideoHome").click(function (e) {
      divArquivo = $(this).parent().parent().parent();
      let radio = divArquivo.find('input[name="radioVideo"]');

      $(".selecaoVideoHome").each(function () {
        $(this).css('background-color', 'transparent');
      });

      radio.prop("checked", true);
      if (radio.is(":checked")) {
        divArquivo.css('background-color', 'rgba(0,0,0,0.3');
      }

    });

    $(".btnSelecaoImagem").click(function (e) {
      divArquivo = $(this).parent().parent().parent();
      let radio = divArquivo.find('input[name="radioImagem"]');

      $(".selecaoImagem").each(function () {
        $(this).css('background-color', 'transparent');
      });

      radio.prop("checked", true);
      if (radio.is(":checked")) {
        divArquivo.css('background-color', 'rgba(0,0,0,0.3');
      }

    });

    $("#btnSalvarBDVideo").click(function () {
      let radio = $(".selecaoVideoHome").find('input[name="radioVideo"]');
      let nameVideo = null;

      radio.each(function () {
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
            },
            error: function (request, status, error) {
              alert("Erro ao alterar vídeo! Recarregue a página e tente novamente.");
            }
          });

        }
      });
    });

    $("#btnSalvarBDComentario").click(function () {
      let radio = $(".selecaoImagem").find('input[name="radioImagem"]');
      let nameImagem = null;
      radio.each(function () {
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