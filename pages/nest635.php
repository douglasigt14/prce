<?php require_once __DIR__ . '/header.php'; ?>

<style>
hmtl, body {
    position:relative;
    overflow-x: hidden;
}
</style>

<div id="rootEmpreendimento">
        <div class="container-fluid p-0 m-0 part1">
                <img src="<?= Functions::urlBase('assets/images/capa-nest635.jpg'); ?>" class="w-100">
                <div class="w-100" id="divLogoEmpreendimento">
                        <img src="<?= Functions::urlBase('assets/images/logoNest635.png'); ?>">
                </div>
        </div>

        <div class="container-fluid p-0 m-0 part2">
                <div class="row">
                        <div class="col-md-7 part2-imagem">
                                <img src="<?= Functions::urlBase('assets/images/nest635-i2.jpg'); ?>" class="w-100">
                        </div>
                        <div class="col-md-5 part2-texto">
                                <h1>Um novo conceito de se viver bem</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus metus rutrum tristique sagittis. Etiam sit amet placerat metus, vehicula sagittis lacus. Morbi ornare ante eu ligula pretium, non rhoncus est cursus. Phasellus aliquet elementum est, elementum semper metus venenatis quis. Vestibulum sed diam et quam semper cursus. Donec tincidunt tincidunt sapien, dictum euismod neque dignissim a.</p>
                        </div>
                </div>
        </div>

        <div class="container-fluid p-0 m-0 part3">
                <div class="row">
                        <div class="col-md-3">
                                <h2>Plantas</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse rhoncus metus rutrum tristique sagittis. Etiam sit amet placerat metus, vehicula sagittis lacus.</p>
                                <p class="pt-3">
                                        <strong>Em obras - Zona 08</strong><br>
                                        R. Paraguai, 598 -Zona 08<br>
                                        Arquitetura - A5 Arquitetura
                                </p>
                        
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
                <h1 class="title">Uma localização<br>estratégica muda tudo</h1>
                <p class="sub-title">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam, nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
                <div class="text-localizacao">
                        <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>">
                        <p>R. Paraguai, 598 - Zona 08</p>
                        <a href="https://maps.google.com/maps/dir//R.+Paraguai+-+Zona+08+Maring%C3%A1+-+PR+87050-715/@-23.4476303,-51.9124752,17z/data=!4m5!4m4!1m0!1m2!1m1!1s0x94ecd09e4a3c9caf:0x8f5d681cebee4b03">Ver rota</a>
                </div>
                <div id="mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.355847500895!2d-51.91505012474418!3d-23.447625357423437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd09e4a3c9caf%3A0x8f5d681cebee4b03!2sR.%20Paraguai%20-%20Zona%2008%2C%20Maring%C3%A1%20-%20PR%2C%2087050-715!5e0!3m2!1spt-BR!2sbr!4v1700347009871!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <h5>A5 ARQUITETURA</h5>
                                <h5>interiores</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis feugiat libero. Suspendisse venenatis lacus non urna pulvinar, vitae vestibulum tellus pharetra. Sed vitae nisi augue. Ut at fringilla mi.</p>
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
                                        <h1>Diferencias</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel dictum orci, at sodales erat. Nulla sollicitudin mattis nulla, id auctor nibh. Pellentesque vitae ipsum risus. Vivamus malesuada vestibulum metus, vel condimentum dolor dignissim vel.</p>
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
                                        <h1>Evolução da obras</h1>
                                        <p>Última atualização: Agosto 2023</p>
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
                                                <h5>3.360m<sup>2</sup></h5>
                                        </div>
                                        <div>
                                                <p>Área total</p>
                                                <h5>22.728m<sup>2</sup></h5>
                                        </div>
                                        <div>
                                                <p>Tipologias</p>
                                                <h5>105m<sup>2</sup> a 119m<sup>2</sup></h5>
                                        </div>
                                        <div>
                                                <p>unidades</p>
                                                <h5>100</h5>
                                        </div>
                                </div>

                        </div>
                </div>
        </div>

        <div class="part10">
                <div class="container">
                        <div class="row">

                                <div class="col-md-6 texto-form">
                                        <h1>Conheça mais sobre o Nest 635</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium, ipsum consequat posuere vestibulum, turpis ex pharetra ante, et finibus tortor quam sit amet nibh. Quisque porta in urna et faucibus. Aenean mollis pharetra ex, in scelerisque nisl scelerisque sit amet. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vitae urna sed nisi efficitur sodales vitae in erat. Maecenas augue ante, ullamcorper at posuere sed, congue non nibh. </p>
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