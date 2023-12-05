<?php require_once __DIR__ . '/header.php'; ?>

<style>
hmtl, body {
    position:relative;
    overflow-x: hidden;
}
</style>

<div id="rootEmpreendimento">
        <div class="container-fluid p-0 m-0 part1">
                <img id="capa" class="w-100">
                <div class="w-100" id="divLogoEmpreendimento">
                        <img id="logo">
                </div>
        </div>

        <div class="container-fluid p-0 m-0 part2">
                <div class="row">
                        <div class="col-md-7 part2-imagem">
                                <img id="imagem1" class="w-100">
                        </div>
                        <div class="col-md-5 part2-texto">
                                <h1 id="titulo1"></h1>
                                <p id="texto1"></p>
                        </div>
                </div>
        </div>

        <div class="container-fluid p-0 m-0 part3">
                <div class="row">
                        <div class="col-md-3">
                                <h2 id="titulo-plantas"></h2>
                                <p id="texto-plantas"></p>
                                <p id="endereco" class="pt-3"></p>
                        
                                <div class="btn-group" id="selectPlantas">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                                                Plantas disponíveis <img src="<?= Functions::urlBase('assets/icons/seta3.svg'); ?>">
                                        </button>
                                        <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="#">
                                                        <strong>119m<sup>2</sup></strong><br>
                                                        Varanda ampliada com piscina<br>
                                                        <strong>3 dormitórios | 1 ou 2 suítes</strong>
                                                </a></li>

                                                <li><a class="dropdown-item" href="#">
                                                        <strong>119m<sup>2</sup></strong><br>
                                                        Varanda ampliada<br>
                                                        <strong>3 dormitórios | 1 ou 2 suítes</strong>
                                                </a></li>

                                                <li><a class="dropdown-item" href="#">
                                                        <strong>110m<sup>2</sup></strong><br>
                                                        Varanda<br>
                                                        <strong>3 dormitórios | 1 ou 2 suítes</strong>
                                                </a></li>

                                                <li><a class="dropdown-item" href="#">
                                                        <strong>105m<sup>2</sup></strong><br>
                                                        Living ampliado<br>
                                                        <strong>3 dormitórios | 1 ou 2 suítes</strong>
                                                </a></li>
                                                
                                        </ul>
                                </div>
                                
                                <br>

                                <button type="button" class="btn btnContato mt-4">Entre em contato</button>

                        </div>
                        <div class="col-md-9">

                                <div class="owl-carousel" id="carouselPlantas">
                                        
                                        <div><img src="<?= Functions::urlBase('assets/images/nest635-planta-a1-living-ampliado-105.png'); ?>"></div>

                                        <div><img src="<?= Functions::urlBase('assets/images/nest635-planta-a1-living-ampliado-105.png'); ?>"></div>

                                        <div><img src="<?= Functions::urlBase('assets/images/nest635-planta-a1-living-ampliado-105.png'); ?>"></div>

                                </div>

                                <div id="divBtnsPlantas">
                                        <button id="btnAnteriorPlantas" class="refletir">
                                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                                        </button>
                                        <span id="indexCarouselPlantas">
                                                01<span>/03</span>
                                        </span>
                                        <button id="btnProximoPlantas">
                                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                                        </button>
                                </div>

                        </div>
                </div>
        </div>

        <div class="container-fluid part4" id="divApartamentosDecorados">
                <h1 class="title">Apartamentos decorados</h1>
                <div class="mt-5" id="divLoadApartamentosDecorados">
                        <div class="owl-carousel" id="carouselApartamentosDecorados">
                        
                                <div>
                                        <a href="">
                                                <div class="card">
                                                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                        <div class="card-body">
                                                                <span class="descricao-card">Piscina com deck e piscina natural</span>
                                                        </div>
                                                </div>
                                        </a>
                                </div>

                                <div>
                                        <a href="">
                                                <div class="card">
                                                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                        <div class="card-body">
                                                                <span class="descricao-card">Piscina com deck e piscina natural</span>
                                                        </div>
                                                </div>
                                        </a>
                                </div>

                                <div>
                                        <a href="">
                                                <div class="card">
                                                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                        <div class="card-body">
                                                                <span class="descricao-card">Piscina com deck e piscina natural</span>
                                                        </div>
                                                </div>
                                        </a>
                                </div>

                                <div>
                                        <a href="">
                                                <div class="card">
                                                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                        <div class="card-body">
                                                                <span class="descricao-card">Piscina com deck e piscina natural</span>
                                                        </div>
                                                </div>
                                        </a>
                                </div>

                        </div>
                </div>
        </div>

        <div class="container-fluid">
                <div id="divBtnsApartamentosDecorados">
                        <button id="btnAnteriorApartamentosDecorados" class="refletir">
                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                        </button>
                        <span id="indexApartamentosDecorados">
                                01<span>/03</span>
                        </span>
                        <button id="btnProximoApartamentosDecorados">
                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                        </button>
                </div>
        </div>
        
        <div class="container-fluid part5" id="divMapaRegiao">
                <h1 id="titulo-localizacao" class="title"></h1>
                <p id="texto-localizacao" class="sub-title"></p>
                <div class="text-localizacao">
                        <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>">
                        <p id="localizacao"></p>
                        <a id="rota-localizacao">Ver rota</a>
                </div>
                <div id="mapa">
                        <iframe id="mapa-localizacao" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row" id="divConhecaRegiao">
                        <div class="col-md-4">
                                <h1>Conheça<br>a região</h1>
                                <h6>ACADEMIAS MODERNAS E TECNOLÓGICAS PARA SEUS TREINOS</h6>
                                <p>Líder em seu segmento na América Latina, a Smart Fit é uma das academias mais modernas e democráticas para você treinar e colocar a saúde em dia.</p>
                                <div id="divBtnsConhecaRegiao">
                                        <button id="btnAnteriorConhecaRegiao" class="refletir">
                                                <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
                                        </button>
                                        <span id="indexConhecaRegiao">
                                                01<span>/03</span>
                                        </span>
                                        <button id="btnProximoConhecaRegiao">
                                                <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
                                        </button>
                                </div>
                        </div>
                        <div class="col-md-8">

                                <div class="owl-carousel" id="carouselConhecaRegiao">
                                
                                        <div><img src="<?= Functions::urlBase('assets/images/conhecaRegiao.jpg'); ?>"></div>

                                        <div><img src="<?= Functions::urlBase('assets/images/conhecaRegiao.jpg'); ?>"></div>

                                </div>

                        </div>
                </div>
        </div>

        <div class="container-fluid part6" id="divAreasComuns">
                <h1 class="title">Áreas comuns</h1>
                <div class="mt-5" id="divLoadAreasComuns">
                        <div class="owl-carousel" id="carouselAreasComuns">
                        
                                <div>
                                        <div class="card">
                                                <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                <div class="border-card"></div>
                                        </div>        
                                </div>

                                <div>
                                        <div class="card">
                                                <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                <div class="border-card"></div>
                                        </div>        
                                </div>

                                <div>
                                        <div class="card">
                                                <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                                                <div class="border-card"></div>
                                        </div>        
                                </div>

                        </div>
                </div>
        </div>

        <div class="container-fluid">
                <div id="divBtnsAreasComuns">
                        <button id="btnAnteriorAreasComuns" class="refletir">
                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                        </button>
                        <span id="indexAreasComuns">
                                01<span>/03</span>
                        </span>
                        <button id="btnProximoAreasComuns">
                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                        </button>
                </div>
        </div>

        <div class="container-fluid part7">
                <div class="row" id="divEquipe">
                        <div class="col-md-4">
                                <h1>Equipe</h1>
                                <h5 id="titulo-equipe"></h5>
                                <h5 id="subtitulo-equipe"></h5>
                                <p id="texto-equipe"></p>
                                <div id="divBtnsEquipe">
                                        <button id="btnAnteriorEquipe" class="refletir">
                                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                                        </button>
                                        <span id="indexEquipe">
                                                01<span>/03</span>
                                        </span>
                                        <button id="btnProximoEquipe">
                                                <img src="<?= Functions::urlBase('assets/icons/seta4.svg'); ?>">
                                        </button>
                                </div>
                        </div>
                        <div class="col-md-8">

                                <div class="owl-carousel" id="carouselEquipe">
                                
                                        <div><img src="<?= Functions::urlBase('assets/images/arquitetaNest635.jpg'); ?>"></div>

                                        <div><img src="<?= Functions::urlBase('assets/images/arquitetaNest635.jpg'); ?>"></div>

                                </div>

                        </div>
                </div>
        </div>

        <div class="part8">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                        <h1 id="titulo-diferenciais"></h1>
                                        <p id="texto-diferenciais"></p>
                                </div>
                        </div>
                        
                        <div class="row">
                                <div class="col-md-3">  
                                        <img src="<?= Functions::urlBase('assets/icons/ar-condicionado.svg'); ?>">
                                        <h5>Infraestrutura para ar condicionado</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/churrasqueira.svg'); ?>">
                                        <h5>Churrasqueira a carvão</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/tubulacao-agua.svg'); ?>">
                                        <h5>Tubulação de água quente</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/casa-seta.svg'); ?>">
                                        <h5>Pé direito de 2,70m</h5>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/engenheiro-computador.svg'); ?>">
                                        <h5>Laje técnica separada da área social</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/lavabo.svg'); ?>">
                                        <h5>Lavabo</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/pias.svg'); ?>">
                                        <h5>Pia com duas cubas no banheiro da suíte principal</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/janelas-persianas.svg'); ?>">
                                        <h5>Janelas persianas automatizadas nos quartos</h5>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/jarro-planta.svg'); ?>">
                                        <h5>Paisagismo presente em todas as sacadas e janelas da suíte principal</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/piso-laminado.svg'); ?>">
                                        <h5>Piso laminado nas áreas íntima e social</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/carros.svg'); ?>">
                                        <h5>2 ou 3 vagas de garagem</h5>
                                </div>

                                <div class="col-md-3">
                                <img src="<?= Functions::urlBase('assets/icons/utility-box.svg'); ?>">
                                        <h5>73 unidade com Utility Box</h5>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/sol.svg'); ?>">
                                        <h5>Área social com elevada iluminação natural</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/elevador.svg'); ?>">
                                        <h5>Cada elevador social atende apenas duas unidades no pavimento</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/tablet-casa.svg'); ?>">
                                        <h5>Infraestrutura para automação residencial e aspirador central</h5>
                                </div>

                                <div class="col-md-3">
                                        <img src="<?= Functions::urlBase('assets/icons/prancheta-personalizacao.svg'); ?>">
                                        <h5>Possibilidade de personalização</h5>
                                </div>
                        </div>

                </div>
        </div>

        <div class="part9">
                <div class="container">
                        <div class="row">

                                <div class="col-md-12">
                                        <h1 id="titulo-evolucaoObra"></h1>
                                        <p id="texto-evolucaoObra"></p>
                                </div>
                                
                                <div class="col-md-4" id="statusSecundarios">

                                        <div class="row">
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Fundação"></div>        
                                                </div>        
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Estrutura"></div>        
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Alvenarias"></div>        
                                                </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Fundação"></div>        
                                                </div>        
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Estrutura"></div>        
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Alvenarias"></div>        
                                                </div>
                                        </div>

                                        <div class="row">
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Fundação"></div>        
                                                </div>        
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Estrutura"></div>        
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                        <div class="circlechart" data-percentage="90" data-title="Alvenarias"></div>        
                                                </div>
                                        </div>

                                </div>
                                
                                <div class="col-md-4" id="statusGeral">
                                        <div class="circlechart" data-percentage="90" data-previsao="DEZEMBRO DE 2025" id="loaderStatusGeral"></div>
                                </div>                   

                                <div class="col-md-4" id="imagensEvolucaoObra">
                                        <div class="owl-carousel" id="carouselEvolucaoObra">
                                                <div><img src="<?= Functions::urlBase('assets/images/slide.jpg'); ?>"></div>
                                                <div><img src="<?= Functions::urlBase('assets/images/slide.jpg'); ?>"></div>
                                        </div>
                                        <h2>Agosto 2023</h2>
                                        <div id="divBtnsEvolucaoObra">
                                                <button id="btnAnteriorEvolucaoObra" class="refletir">
                                                        <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
                                                </button>
                                                <span id="indexEvolucaoObra">
                                                        01<span>/03</span>
                                                </span>
                                                <button id="btnProximoEvolucaoObra">
                                                        <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
                                                </button>
                                        </div>
                                </div>

                                <div class="col-md-12" id="dadosGeraisEmpreendimento">
                                        <div>
                                                <p>Área do terreno</p>
                                                <h5 id="areaTerreno-evolucaoObra"></h5>
                                        </div>
                                        <div>
                                                <p>Área total</p>
                                                <h5 id="areaTotal-evolucaoObra"></h5>
                                        </div>
                                        <div>
                                                <p>Tipologias</p>
                                                <h5 id="tipologias-evolucaoObra"></h5>
                                        </div>
                                        <div>
                                                <p>unidades</p>
                                                <h5 id="unidades-evolucaoObra"></h5>
                                        </div>
                                </div>

                        </div>
                </div>
        </div>

        <div class="part10">
                <div class="container">
                        <div class="row">

                                <div class="col-md-6 texto-form">
                                        <h1 id="titulo-formulario"></h1>
                                        <p id="texto-formulario"></p>
                                </div>

                                <div class="col-md-6">
                                        <form>
                                                <div class="mb-4">
                                                        <label for="inputNome" class="form-label">Nome</label>
                                                        <input type="text" class="form-control form-control-lg" id="inputNome">
                                                </div>
                                                <div class="mb-4">
                                                        <label for="inputEmail" class="form-label">Email</label>
                                                        <input type="email" class="form-control form-control-lg" id="inputNome">
                                                </div>
                                                <div class="mb-4">
                                                        <label for="inputTelefone" class="form-label">Telefone</label>
                                                        <input type="text" class="form-control form-control-lg" id="inputTelefone">
                                                </div>
                                                <div class="mb-4">
                                                        <label for="selectQntDormitorios" class="form-label">Quantos dormitórios?</label>
                                                        <select class="form-select form-select-lg" id="selectQntDormitorios">
                                                                <option selected>0</option>
                                                                <option value="1">1</option>
                                                                <option value="2">1</option>
                                                                <option value="3">3</option>
                                                        </select>
                                                </div>
                                                <div class="form-check mb-1">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">Ao me cadastrar estou de acordo com os <a href="#">termos de uso e política de privacide</a></label>
                                                </div>
                                                <button type="button" class="btn mt-4">Enviar</button>
                                        </form>
                                </div>

                        </div>
                </div>
        </div>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>

<script>
    const url1 = 'requests/select.php?table=empreendimentos';

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
                document.querySelector("#capa").innerHTML = data[0]['capa'];
                document.querySelector("#logo").innerHTML = data[0]['logo'];
                document.querySelector("#imagem1").innerHTML = data[0]['imagem1'];
                document.querySelector("#titulo1").innerHTML = data[0]['titulo1'];
                document.querySelector("#texto1").innerHTML = data[0]['texto1'];
                document.querySelector("#titulo-plantas").innerHTML = data[0]['titulo_plantas'];
                document.querySelector("#texto-plantas").innerHTML = data[0]['texto_plantas'];
                document.querySelector("#endereco").innerHTML = data[0]['endereco'];
                document.querySelector("#titulo-localizacao").innerHTML = data[0]['titulo_localizacao'];
                document.querySelector("#texto-localizacao").innerHTML = data[0]['texto_localizacao'];
                document.querySelector("#localizacao").innerHTML = data[0]['localizacao'];
                document.querySelector("#rota-localizacao").href = data[0]['rota_localizacao'];
                document.querySelector("#mapa-localizacao").src = data[0]['mapa_localizacao'];
                document.querySelector("#titulo-equipe").innerHTML = data[0]['titulo_equipe'];
                document.querySelector("#subtitulo-equipe").innerHTML = data[0]['subtitulo_equipe'];
                document.querySelector("#texto-equipe").innerHTML = data[0]['texto_equipe'];
                document.querySelector("#titulo-diferenciais").innerHTML = data[0]['titulo_diferenciais'];
                document.querySelector("#texto-diferenciais").innerHTML = data[0]['texto_diferenciais'];
                document.querySelector("#titulo-evolucaoObra").innerHTML = data[0]['titulo_evolucaoObra'];
                document.querySelector("#texto-evolucaoObra").innerHTML = data[0]['texto_evolucaoObra'];
                document.querySelector("#areaTerreno-evolucaoObra").innerHTML = data[0]['areaTerreno_evolucaoObra'];
                document.querySelector("#areaTotal-evolucaoObra").innerHTML = data[0]['areaTotal_evolucaoObra'];
                document.querySelector("#tipologias-evolucaoObra").innerHTML = data[0]['tipologias_evolucaoObra'];
                document.querySelector("#unidades-evolucaoObra").innerHTML = data[0]['unidades_evolucaoObra'];
                document.querySelector("#titulo-formulario").innerHTML = data[0]['titulo_formulario'];
                document.querySelector("#texto-formulario").innerHTML = data[0]['texto_formulario'];
                
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

//     const url2 = 'requests/select.php?table=sobre_diferenciais';

//     fetch(url2)
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error(`Erro na solicitação: ${response.statusText}`);
//             }
//             return response.json();
//         })
//         .then(data => {
//             if (data) {

//                 for (let i = 0; i < 6; i++) {//3
//                     document.querySelector("#titulo_diferencial" + (i + 1)).innerHTML = data[i]['titulo'];
//                     document.querySelector("#texto_diferencial" + (i + 1)).innerHTML = data[i]['texto'];
//                 }

//             }
//         })
//         .catch(error => {
//             // Manipula erros durante a solicitação
//             console.error('Erro durante a solicitação:', error);
//         });

</script>