<?php require_once __DIR__ . '/header.php'; ?>

<div id="carousel" class="carousel carousel-white slide">
    <div class="carousel-inner">

        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= Functions::urlBase('assets/images/slide.jpg'); ?>" class="d-block w-100">
            <div class="carousel-caption">
                <h1>PALM 786 HOMECLUB - É só entrar. E morar.</h1>
                <a href="#">Ver mais <img src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"
                        class="setaBtn"></a>
            </div>
        </div>

        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= Functions::urlBase('assets/images/slide.jpg'); ?>" class="d-block w-100">
            <div class="carousel-caption">
                <h1>HAUS 44 - Ouse, aprecie a vida.</h1>
                <a href="#">Ver mais <img src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"
                        class="setaBtn"></a>
            </div>
        </div>

        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= Functions::urlBase('assets/images/slide.jpg'); ?>" class="d-block w-100">
            <div class="carousel-caption">
                <h1>NEST 635 - Viva a sua natureza</h1>
                <a href="#">Ver mais <img src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"
                        class="setaBtn"></a>
            </div>
        </div>

    </div>

    <div class="div-btns-control-carousel">
        <button class="btn-control-carousel" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>" class="refletir">
        </button>

        <button class="btn-control-carousel" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
        </button>

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

    </div>
</div>

<div class="container-fluid" id="pageEmpreendimentos">
    <h1>Em obras</h1>

    <div class="empreendimento-obra">
        <img src="<?= Functions::urlBase('assets/images/empreendimento.jpg'); ?>" class="capa-empreendimento-obra">
        <div class="detalhes-empreendimento-obra">
            <img src="<?= Functions::urlBase('assets/images/logoPalm786.png'); ?>"
                class="logo-capa-empreendimento-obra">
            <div>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidnt ut
                    labore et dolore magna aliquayam erat, sed diam voluptua. At vero eos et</span>
                <a href="#" class="btn-empreendimento-obra">Ver mais <img
                        src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"></a>
            </div>
        </div>
    </div>

    <div class="empreendimento-obra-inverter">
        <img src="<?= Functions::urlBase('assets/images/empreendimento.jpg'); ?>" class="capa-empreendimento-obra">
        <div class="detalhes-empreendimento-obra">
            <div>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidnt ut
                    labore et dolore magna aliquayam erat, sed diam voluptua. At vero eos et</span>
                <a href="#" class="btn-empreendimento-obra">Ver mais <img
                        src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"></a>
            </div>
            <img src="<?= Functions::urlBase('assets/images/logoPalm786.png'); ?>"
                class="logo-capa-empreendimento-obra">
        </div>
    </div>

    <div class="empreendimento-obra">
        <img src="<?= Functions::urlBase('assets/images/empreendimento.jpg'); ?>" class="capa-empreendimento-obra">
        <div class="detalhes-empreendimento-obra">
            <img src="<?= Functions::urlBase('assets/images/logoPalm786.png'); ?>"
                class="logo-capa-empreendimento-obra">
            <div>
                <span>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidnt ut
                    labore et dolore magna aliquayam erat, sed diam voluptua. At vero eos et</span>
                <a href="#" class="btn-empreendimento-obra">Ver mais <img
                        src="<?= Functions::urlBase('assets/icons/setaBtn.svg'); ?>"></a>
            </div>
        </div>
    </div>

    <div id="empreendimentos-entregues">

        <div class="owl-carousel" id="carouselEmpreendimentosEntregues">

            <div>
                <div class="card">
                    <img src="<?= Functions::urlBase('assets/images/empreendimentoEntregue.jpg'); ?>">
                    <div class="card-body">
                        <div class="infos-empreendimentos-entregue">
                            <span class="status-empreendimentos-entregue">Entregue</span><br>
                            <span class="name-empreendimentos-entregue">Porto Rico Risort</span><br>
                            <span class="localizacao-empreendimentos-entregue">
                                <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>" class="me-1">
                                Porto Rico - PR
                            </span>
                        </div>
                    </div>
                    <span class="card-border"></span>
                </div>
            </div>

            <div>
                <div class="card">
                    <img src="<?= Functions::urlBase('assets/images/empreendimentoEntregue.jpg'); ?>">
                    <div class="card-body">
                        <div class="infos-empreendimentos-entregue">
                            <span class="status-empreendimentos-entregue">Entregue</span><br>
                            <span class="name-empreendimentos-entregue">Porto Rico Risort</span><br>
                            <span class="localizacao-empreendimentos-entregue">
                                <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>" class="me-1">
                                Porto Rico - PR
                            </span>
                        </div>
                    </div>
                    <span class="card-border"></span>
                </div>
            </div>

            <div>
                <div class="card">
                    <img src="<?= Functions::urlBase('assets/images/empreendimentoEntregue.jpg'); ?>">
                    <div class="card-body">
                        <div class="infos-empreendimentos-entregue">
                            <span class="status-empreendimentos-entregue">Entregue</span><br>
                            <span class="name-empreendimentos-entregue">Porto Rico Risort</span><br>
                            <span class="localizacao-empreendimentos-entregue">
                                <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>" class="me-1">
                                Porto Rico - PR
                            </span>
                        </div>
                    </div>
                    <span class="card-border"></span>
                </div>
            </div>

            <div>
                <div class="card">
                    <img src="<?= Functions::urlBase('assets/images/empreendimentoEntregue.jpg'); ?>">
                    <div class="card-body">
                        <div class="infos-empreendimentos-entregue">
                            <span class="status-empreendimentos-entregue">Entregue</span><br>
                            <span class="name-empreendimentos-entregue">Porto Rico Risort</span><br>
                            <span class="localizacao-empreendimentos-entregue">
                                <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>" class="me-1">
                                Porto Rico - PR
                            </span>
                        </div>
                    </div>
                    <span class="card-border"></span>
                </div>
            </div>

            <div>
                <div class="card">
                    <img src="<?= Functions::urlBase('assets/images/empreendimentoEntregue.jpg'); ?>">
                    <div class="card-body">
                        <div class="infos-empreendimentos-entregue">
                            <span class="status-empreendimentos-entregue">Entregue</span><br>
                            <span class="name-empreendimentos-entregue">Porto Rico Risort</span><br>
                            <span class="localizacao-empreendimentos-entregue">
                                <img src="<?= Functions::urlBase('assets/icons/pinLocalizacao.svg'); ?>" class="me-1">
                                Porto Rico - PR
                            </span>
                        </div>
                    </div>
                    <span class="card-border"></span>
                </div>
            </div>

        </div>
    </div>

    <div id="divBtns" class="mt-5">
        <button id="btnAnteriorEmpreendimentosEntregues" class="refletir">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
        </button>
        <button id="btnProximoEmpreendimentosEntregues">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
        </button>
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

                //document.querySelector("#capa").innerHTML = data[0]['capa'];
                console.log(data);
                for (let i = 1; i <= 4; i++) {//3
                    document.querySelector("#titulo" + i).innerHTML = data[0]['titulo' + i];
                }

                for (let i = 1; i <= 8; i++) {//11
                    document.querySelector("#texto" + i).innerHTML = data[0]['texto' + i];
                }

                document.querySelector("#capa").src = data[0]['capa'];
                document.querySelector("#logo").src = data[0]['logo'];
                document.querySelector("#imagem").src = data[0]['imagem1'];
                document.querySelector("#foto-processos").src = data[0]['imagem2'];


                const config = {
                    autoplay: false,
                    ui: {
                        image: data[0]['capa'],
                    },
                    sources: [
                        {
                            type: "mp4",
                            src: data[0]['video'],
                        }
                    ],
                };
                const element = document.querySelector('#videoSobre');
                const player = IndigoPlayer.init(element, config);
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

    // const url2 = 'requests/select.php?table=sobre_diferenciais';

    // fetch(url2)
    //     .then(response => {
    //         if (!response.ok) {
    //             throw new Error(`Erro na solicitação: ${response.statusText}`);
    //         }
    //         return response.json();
    //     })
    //     .then(data => {
    //         if (data) {

    //             //document.querySelector("#capa").innerHTML = data[0]['capa'];
    //             for (let i = 0; i < 6; i++) {//3
    //                 document.querySelector("#titulo_diferencial" + (i + 1)).innerHTML = data[i]['titulo'];
    //                 document.querySelector("#texto_diferencial" + (i + 1)).innerHTML = data[i]['texto'];
    //             }

    //         }
    //     })
    //     .catch(error => {
    //         // Manipula erros durante a solicitação
    //         console.error('Erro durante a solicitação:', error);
    //     });

</script>