<?php require_once __DIR__ . '/headerAdmin.php';


$pdo = new Database();
$empreendimentos = $pdo->select("carrousel_empreendimentos");

?>

<div class="conteiner-principal p-5">
  <div class="row mt-3 w-100">
    <h3>Empreendimentos</h3>
    <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post" enctype="multipart/form-data">
      <input type="hidden" name="rota" value="/admin/sobre">
      <input type="hidden" name="dir" value="sobre">
      <div class="row w-100">
        <div class="col-md-12">
          <div class="w-100 d-flex align-items-center justify-content-center">
            <h4 class="w-50">Empreendimentos</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEmpreendimentos">Adicionar novo Empreendimento</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Empreendimento</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>NEST635</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>HAUS44</td>
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
            <h4 class="w-50">Carrousel de Empreendimentos Home</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalCarrousel">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Empreendimento</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Texto</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>NEST635</td>
                    <td>assets/images/slide.jpg</td>
                    <td>Texto-sssss</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>HAUS44</td>
                    <td>assets/images/slide.jpg</td>
                    <td>Texto-sssss</td>
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
            <h4 class="w-50">Empreendimentos em Obras</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalObras">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Empreendimento</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Texto</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>NEST635</td>
                    <td>assets/images/slide.jpg</td>
                    <td>assets/images/logoPalm786.png</td>
                    <td>Texto-sssss</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>HAUS44</td>
                    <td>assets/images/slide.jpg</td>
                    <td>assets/images/logoPalm786.png</td>
                    <td>Texto-sssss</td>
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
            <h4 class="w-50">Empreendimentos Entregues</h4>
            <button type="button" class="btn btn-primary w-50 mt-3 mb-3" data-bs-toggle="modal"
              data-bs-target="#modalEntregues">Adicionar novo</button>
          </div>
          <div class="row align-items-center mb-4">
            <div class="col-12">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Empreendimento</th>
                    <th scope="col">Imagem</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Localização</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>NEST635</td>
                    <td>assets/images/slide.jpg</td>
                    <td>Porto Rico Risort</td>
                    <td>Porto Rico - PR</td>
                    <td><i class="fa fa-edit"></i> </td>
                    <td> <i class="fa fa-trash"></i></td>
                  </tr>
                  <tr>
                    <td>HAUS44</td>
                    <td>assets/images/slide.jpg</td>
                    <td>Porto Rico Risort</td>
                    <td>Porto Rico - PR</td>
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
<div class="modal" tabindex="-1" id="modalEmpreendimentos">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar empreendimento</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="rota" value="/admin/sobre">
            <input type="hidden" name="dir" value="sobre">
            <div class="row g-3 mb-3 align-items-start">
              <div class="col-5" id="selecaoImagemDiferenciais">
                <label class="form-label fw-bold">Thumbnail</label>
                <div class="w-100 mt-4 mb-4">
                  <input type="file" class="form-control" name="foto-diferenciais" />
                  <img id="thumbnail" class=" img-fluid mt-3">
                </div>
              </div>
              <div class="col-7">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input name="nome" type="text" class="form-control" id="titulo3">
                <br>
                <label for="descricao" class="form-label fw-bold">Descrição</label>
                <input name="descricao" class="form-control" id="texto4" rows="3"></input><br>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row align-items-center mt-4 mb-4" id="selecaoCapa">
                <div class="col-6">
                  <label class="form-label fw-bold">Capa</label> <br>
                  <input type="file" class="form-control" name="capa" />
                  <img name="capa" id="capa" class="img-fluid mt-3">
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Logo</label> <br>
                  <input type="file" class="form-control" name="capa" />
                  <img name="capa" id="capa" class="img-fluid mt-3">
                </div>
              </div>
              <div class="row g-3 mb-3 align-items-start">
                <div class="col-5" id="selecaoImagemDiferenciais">
                  <label class="form-label fw-bold">Imagem 1</label>
                  <div class="w-100 mt-4 mb-4">
                    <input type="file" class="form-control" name="foto-diferenciais" />
                    <img id="thumbnail" class=" img-fluid mt-3">
                  </div>
                </div>
                <div class="col-7">
                  <label for="nome" class="form-label fw-bold">Titulo 1</label>
                  <input name="nome" type="text" class="form-control" id="titulo3">
                  <br>
                  <label for="descricao" class="form-label fw-bold">Texto 1</label>
                  <input name="descricao" class="form-control" id="texto4" rows="3"></input><br>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-Plantas</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="texto1" class="form-label fw-bold">Texto-Plantas</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Endereço</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="texto1" class="form-label fw-bold">Texto-localização</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Rota-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Mapa-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="col-md-12">
                <div class="row align-items-center mb-4">
                  <div class="col-6">
                    <label for="titulo1" class="form-label fw-bold">Titulo</label>
                    <input type="text" name="titulo1" class="form-control" id="titulo1">
                  </div>
                  <div class="col-6">
                    <label for="titulo1" class="form-label fw-bold">Sub-titulo</label>
                    <input type="text" name="titulo1" class="form-control" id="titulo1">
                  </div>
                </div>
                <div class="row align-items-center mb-4">
                  <label for="titulo1" class="form-label fw-bold">Texto-equipe</label>
                  <textarea name="titulo1" class="form-control" id="titulo1" rows="3"></textarea>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-diferenciais</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-diferenciais</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-evoluçãoObra</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-EvoluçãoObra</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Status-texto</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="texto1" class="form-label fw-bold">Status-Porcentagem</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                  <label for="texto1" class="form-label fw-bold">Previsão de Entrega</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Área do terreno</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Área total</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Unidades</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Tipologias</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-formulario</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-formulario</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
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


<div class="modal" tabindex="-1" id="modalEmpreendimentos">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar empreendimento</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="<?= Functions::urlBase('requests/insertSobre.php'); ?>" method="post"
            enctype="multipart/form-data">
            <input type="hidden" name="rota" value="/admin/sobre">
            <input type="hidden" name="dir" value="sobre">
            <div class="row g-3 mb-3 align-items-start">
              <div class="col-5" id="selecaoImagemDiferenciais">
                <label class="form-label fw-bold">Thumbnail</label>
                <div class="w-100 mt-4 mb-4">
                  <input type="file" class="form-control" name="foto-diferenciais" />
                  <img id="thumbnail" class=" img-fluid mt-3">
                </div>
              </div>
              <div class="col-7">
                <label for="nome" class="form-label fw-bold">Nome</label>
                <input name="nome" type="text" class="form-control" id="titulo3">
                <br>
                <label for="descricao" class="form-label fw-bold">Descrição</label>
                <input name="descricao" class="form-control" id="texto4" rows="3"></input><br>
              </div>
            </div>
            <div class="col-md-12">
              <div class="row align-items-center mt-4 mb-4" id="selecaoCapa">
                <div class="col-6">
                  <label class="form-label fw-bold">Capa</label> <br>
                  <input type="file" class="form-control" name="capa" />
                  <img name="capa" id="capa" class="img-fluid mt-3">
                </div>
                <div class="col-6">
                  <label class="form-label fw-bold">Logo</label> <br>
                  <input type="file" class="form-control" name="capa" />
                  <img name="capa" id="capa" class="img-fluid mt-3">
                </div>
              </div>
              <div class="row g-3 mb-3 align-items-start">
                <div class="col-5" id="selecaoImagemDiferenciais">
                  <label class="form-label fw-bold">Imagem 1</label>
                  <div class="w-100 mt-4 mb-4">
                    <input type="file" class="form-control" name="foto-diferenciais" />
                    <img id="thumbnail" class=" img-fluid mt-3">
                  </div>
                </div>
                <div class="col-7">
                  <label for="nome" class="form-label fw-bold">Titulo 1</label>
                  <input name="nome" type="text" class="form-control" id="titulo3">
                  <br>
                  <label for="descricao" class="form-label fw-bold">Texto 1</label>
                  <input name="descricao" class="form-control" id="texto4" rows="3"></input><br>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-Plantas</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="texto1" class="form-label fw-bold">Texto-Plantas</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Endereço</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="texto1" class="form-label fw-bold">Texto-localização</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Rota-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Mapa-localização</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="col-md-12">
                <div class="row align-items-center mb-4">
                  <div class="col-6">
                    <label for="titulo1" class="form-label fw-bold">Titulo</label>
                    <input type="text" name="titulo1" class="form-control" id="titulo1">
                  </div>
                  <div class="col-6">
                    <label for="titulo1" class="form-label fw-bold">Sub-titulo</label>
                    <input type="text" name="titulo1" class="form-control" id="titulo1">
                  </div>
                </div>
                <div class="row align-items-center mb-4">
                  <label for="titulo1" class="form-label fw-bold">Texto-equipe</label>
                  <textarea name="titulo1" class="form-control" id="titulo1" rows="3"></textarea>
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-diferenciais</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-diferenciais</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-evoluçãoObra</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-EvoluçãoObra</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Status-texto</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="texto1" class="form-label fw-bold">Status-Porcentagem</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                  <label for="texto1" class="form-label fw-bold">Previsão de Entrega</label>
                  <textarea name="texto1" class="form-control" id="texto1" rows="3"></textarea>
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Área do terreno</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Área total</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Unidades</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                  <label for="titulo1" class="form-label fw-bold">Tipologias</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
              </div>
              <div class="row align-items-center mb-4">
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Titulo-formulario</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
                <div class="col-6">
                  <label for="titulo1" class="form-label fw-bold">Texto-formulario</label>
                  <input type="text" name="titulo1" class="form-control" id="titulo1">
                </div>
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

<div class="modal" tabindex="-1" id="modalCarrousel">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar novo slide</h3>
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
                <label for="texto" class="form-label fw-bold">Texto</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
              <div class="col-6">
                <label for="frutas">Escolha uma fruta:</label>
                <select id="frutas">
                  <option value="maca">Maçã</option>
                  <option value="banana">Banana</option>
                  <option value="laranja">Laranja</option>
                  <option value="uva">Uva</option>
                </select>
              </div>

            </div>
        </div>

      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalObras">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar novo Card</h3>
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
                <input type="file" class="form-control" name="imagem-card" />
                <img name="imagem" id="imagem-card-obras" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center mt-4 mb-4">
              <div class="col-3"></div>
              <div class="col-6">
                <label class="form-label fw-bold">Logo</label> <br>
                <input type="file" class="form-control" name="logo-card" />
                <img name="logo" id="logo-card" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-6">
                <label for="texto" class="form-label fw-bold">Texto</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
              <div class="col-6">
                <label for="frutas">Escolha uma fruta:</label>
                <select id="frutas">
                  <option value="maca">Maçã</option>
                  <option value="banana">Banana</option>
                  <option value="laranja">Laranja</option>
                  <option value="uva">Uva</option>
                </select>
              </div>

            </div>
        </div>

      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="btnSalvarBDComentario">Salvar</button>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" id="modalEntregues">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Cadastrar novo Card</h3>
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
                <input type="file" class="form-control" name="imagem-card" />
                <img name="imagem" id="imagem-card-entregues" class="img-fluid mt-3">
              </div>
              <div class="col-3"></div>
            </div>
            <div class="row align-items-center">
              <div class="col-4">
                <label for="texto" class="form-label fw-bold">Nome</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
              <div class="col-4">
                <label for="texto" class="form-label fw-bold">Localização</label>
                <input type="text" name="texto" class="form-control" id="texto">
              </div>
              <div class="col-4">
                <label for="frutas">Empreendimento:</label>
                <select id="frutas">
                  <option value="maca">Maçã</option>
                  <option value="banana">Banana</option>
                  <option value="laranja">Laranja</option>
                  <option value="uva">Uva</option>
                </select>
              </div>

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