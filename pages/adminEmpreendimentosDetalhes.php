<?php require_once __DIR__ . '/headerAdmin.php';

$empreendimentos = $pdo->select("empreendimentos");
$plantas = $pdo->select("plantas");
$apartamentos_decorados = $pdo->select("apartamentos_decorados");
$conheca_regiao = $pdo->select("conheca_regiao");
$areas_comuns = $pdo->select("areas_comuns");
$equipe = $pdo->select("equipe");
$diferenciais = $pdo->select("diferenciais");

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
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($plantas as $key => $p_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $p_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $p_emp['name'] ?>
                      </td>
                      <td>
                        <?php echo $p_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='plantas'>
                          <input type="hidden" name="id" value='<?php echo $p_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              data-bs-target="#modalApartDecorados">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($apartamentos_decorados as $key => $a_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $a_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $a_emp['texto_apartamentosDecorados'] ?>
                      </td>
                      <td>
                        <?php echo $a_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='apartamentos_decorados'>
                          <input type="hidden" name="id" value='<?php echo $a_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              data-bs-target="#modalConhecaRegiao">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($conheca_regiao as $key => $cr_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $cr_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $cr_emp['texto_conhecaRegiao'] ?>
                      </td>
                      <td>
                        <?php echo $cr_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='conheca_regiao'>
                          <input type="hidden" name="id" value='<?php echo $cr_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              data-bs-target="#modalAreasComuns">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">imagem</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                    foreach ($areas_comuns as $key => $ac_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $ac_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $ac_emp['imagem'] ?>
                      </td>
                      <td>
                        <?php echo $ac_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='areas_comuns'>
                          <input type="hidden" name="id" value='<?php echo $ac_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              data-bs-target="#modalEquipe">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">imagem</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    foreach ($equipe as $key => $eq_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $eq_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $eq_emp['imagem'] ?>
                      </td>
                      <td>
                        <?php echo $eq_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='equipe'>
                          <input type="hidden" name="id" value='<?php echo $eq_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              data-bs-target="#modalDiferenciais">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Texto</th>
                    <th scope="col">Id Empreendimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Apagar</th>
                  </tr>
                </thead>
                <tbody>
                <tr>
                    <?php
                    foreach ($diferenciais as $key => $df_emp) {
                      ?>
                    <tr>
                      <td>
                        <?php echo $df_emp['id'] ?>
                      </td>
                      <td>
                        <?php echo $df_emp['imagem'] ?>
                      </td>
                      <td>
                        <?php echo $df_emp['idEmpreendimento'] ?>
                      </td>
                      <td><button class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i> </button> </td>
                      <td>
                        <form action="<?= Functions::urlBase('requests/delete.php'); ?>" method="post"
                          enctype="multipart/form-data">
                          <input type="hidden" name="table" value='diferenciais'>
                          <input type="hidden" name="id" value='<?php echo $df_emp['id'] ?>'>
                          <input type="hidden" name="rota" value="<?php echo $rota; ?>">
                          <button class="btn btn-danger btn-sm" type="submit"> <i class="fa fa-trash"></i> </button>
                        </form>

                      </td>
                    </tr>
                    <?php
                    }
                    ?>
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
              <div class="col-12">
                <label for="descricao" class="form-label fw-bold">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao">
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

<div class="modal" tabindex="-1" id="modalApartDecorados">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Novo</h3>
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
              <div class="col-12">
                <label for="descricao" class="form-label fw-bold">Texto</label>
                <input type="text" name="texto" class="form-control" id="texto">
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

<div class="modal" tabindex="-1" id="modalConhecaRegiao">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Novo</h3>
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
                <label for="tamanho" class="form-label fw-bold">Titulo</label>
                <input type="text" name="titulo" class="form-control" id="titulo">
              </div>
              <div class="col-6">
                <label for="nome" class="form-label fw-bold">Subtitulo</label>
                <input type="text" name="subtitulo" class="form-control" id="subtitulo">
              </div>
            </div>
            <div class="row align-items-center">
              <div class="col-12">
                <label for="descricao" class="form-label fw-bold">Texto</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalAreasComuns">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Novo</h3>
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
                <input type="file" class="form-control" name="imagem" />
                <img name="imagem" id="imagem-ac" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalEquipe">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Novo</h3>
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
                <input type="file" class="form-control" name="imagem" />
                <img name="imagem" id="imagem-eq" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
      </div>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalDiferenciais">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar Novo</h3>
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
                <label class="form-label fw-bold">Icone</label> <br>
                <input type="file" class="form-control" name="imagem" />
                <img name="imagem" id="imagem-eq" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-12">
                <label for="descricao" class="form-label fw-bold">Texto</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
      </div>
      <div>
        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal"
          data-bs-target="#modalEmpreendimentos"><i class="fa fa-plus"></i></button>
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