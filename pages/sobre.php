<?php
require_once __DIR__ . '/header.php';
?>

<div id="rootSobre">

    <img id="foto-capa">

    <div class="container part1">
        <div class="row">
            <div class="col-md-6">
                <p>Sobre nós</p>
                <h1 id='titulo1'></h1>
            </div>
            <div class="col-md-5">
                <h3 id="texto1"></h3>
            </div>
            <div class="col-md-1">
                <img src="<?= Functions::urlBase('assets/icons/seta1.svg'); ?>">
            </div>
        </div>
    </div>

    <div class="container part2">
        <div class="row">
            <div class="col-md-9 mx-auto">

                <div id="videoSobre"></div>

            </div>
            <div class="col-md-8 mx-auto" id="texto-video">
                <div class="row">
                    <div class="col-md-6">
                        <h1 id='titulo2'></h1>
                    </div>
                    <div class="col-md-6">
                        <p id='texto2'></p>
                        <p id='texto3'></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid part3">
        <div class="row">
            <div class="col-md-6">
                <img id='imagem-diferenciais'>
            </div>
            <div class="col-md-5 me-auto py-auto" id="texto-diferenciais">
                <h1 id='titulo3'></h1>
                <p id='texto4'></p>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/personalizacao.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial1'></span>
                        </h3>
                        <p id='texto_diferencial1'></p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/gentileza.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial2'></span>
                        </h3>
                        <p id='texto_diferencial2'></p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/privacidade.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial3'></span>
                        </h3>
                        <p id='texto_diferencial3'></p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/exclusividade.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial4'></span>
                        </h3>
                        <p id='texto_diferencial4'></p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/design-inteligente.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial5'></span>
                        </h3>
                        <p id='texto_diferencial5'></p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/inovacao.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white" />
                            </svg>
                            <span id='titulo_diferencial6'></span>
                        </h3>
                        <p id='texto_diferencial6'></p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid seta">
        <img src="<?= Functions::urlBase('assets/icons/seta1.svg'); ?>">
    </div>



    <div class="part4">

        <img id="foto-processos">

        <div class="container part4-text">
            <div class="row">
                <div class="col-md-6">
                    <h1 id='titulo4'></h1>
                    <h3>
                        <ul>
                            <li id='texto5'></li>
                            <li id='texto6'></li>
                        </ul>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p id='texto7'></p>
                    <p id='texto8'></p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>

<script>
    const url1 = 'requests/select.php?table=sobre';

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

                document.querySelector("#foto-capa").src = data[0]['capa'];
                document.querySelector("#imagem-diferenciais").src = data[0]['imagem1'];
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

    const url2 = 'requests/select.php?table=sobre_diferenciais';

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
                    document.querySelector("#titulo_diferencial" + (i + 1)).innerHTML = data[i]['titulo'];
                    document.querySelector("#texto_diferencial" + (i + 1)).innerHTML = data[i]['texto'];
                }

            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

</script>