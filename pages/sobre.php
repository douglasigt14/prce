<?php 
require_once __DIR__ . '/header.php'; 
?>

<div id="rootSobre">

    <img src="<?= Functions::urlBase('assets/images/capaSobre.jpg'); ?>" id="foto-capa">

    <div class="container part1">
        <div class="row">
            <div class="col-md-6">
                <p>Sobre nós</p>
                <h1 id='titulo1'></h1>
            </div>
            <div class="col-md-5">
                <h3 id="texto1"> </h3>
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
                        <h1  id='titulo2'></h1>
                    </div>
                    <div class="col-md-6">
                        <p id='texto2'>
                        </p>
                        <p>A nossa missão é "gearar valor para os clientes e colaboradores, desenvolvendo empreendimentos singulares e com alma".</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid part3">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= Functions::urlBase('assets/images/sobreDiferenciais.jpg'); ?>">
            </div>
            <div class="col-md-5 me-auto py-auto" id="texto-diferenciais">
                <h1>Diferenciais construtivos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia feugiat erat sit amet bibendum. Morbi luctus mi nisi, eu commodo est lacinia sed. Duis tristique pharetra efficitur. Sed volutpat, arcu ut lobortis interdum, velit orci vestibulum nunc, et convallis ligula lorem id quam. Morbi sed magna nisl. Nunc sed odio vel sapien posuere viverra eu vel arcu. Maecenas sem tortor, tempus a sodales ac, efficitur vitae magna. Quisque suscipit tellus ac arcu pulvinar porta. </p>
                
                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/personalizacao.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Pesonalização
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/gentileza.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Gentileza urbana
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/privacidade.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Privacidade
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/exclusividade.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Exclusividade
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/design-inteligente.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Design inteligente
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

                <div class="diferencial">
                    <img src="<?= Functions::urlBase('assets/icons/inovacao.svg'); ?>">
                    <div>
                        <h3>
                            <svg height="8" width="8">
                                <circle cx="4" cy="4" r="4" stroke-width="3" fill="white"/>
                            </svg> 
                            Inovação
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis ante vitae dolor dignissim viverra. In in turpis lacus. Etiam tristique lobortis lacinia. Duis venenatis hendrerit accumsan. Maecenas eros lectus, tincidunt et aliquam non, consequat non nulla.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid seta">
        <img src="<?= Functions::urlBase('assets/icons/seta1.svg'); ?>">
    </div>

    
    
    <div class="part4">

        <img src="<?= Functions::urlBase('assets/images/sobreProcessos.jpg'); ?>" id="foto-processos">

        <div class="container part4-text">
            <div class="row">
                <div class="col-md-6">
                    <h1>Processos<br>construtivos</h1>
                    <h3>
                        <ul>
                            <li>Metodologia BIM</li>
                            <li>Lean Construction</li>
                        </ul>
                    </h3>
                </div>
                <div class="col-md-6">
                    <p>Na vanguarda da inovação, nos destacamos ao empregar ferramentas que definem o futuro da construção civil: Building Information Modeling (BIM) e o Lean Construction. Com essa abordagem, cada empreendimento é planejado e executado com máxima eficiência, precissão e economia de recursos.</p>
                    <p>O uso dessas tecnologias não apenas eleva o padrão de qualidade, mas também demonstra o nosso compromisso com a excelência em cada detalhe. Cada empreendimento que desenvolvemos é uma promessa cumprida, respaldada pela nossa.</p>
                </div>
            </div>
        </div>

    </div>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>

<script>
    const url = 'requests/select.php?table=sobre';

   //Ser exclusivo é da nossa natureza

    // Realiza a solicitação usando o fetch
    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error(`Erro na solicitação: ${response.statusText}`);
        }
        return response.json();
    })
    .then(data => {
        if(data){
            
            //document.querySelector("#capa").innerHTML = data[0]['capa'];
            
            for (let i = 1; i <= 2; i++) {//3
                document.querySelector("#titulo"+i).innerHTML = data[0]['titulo'+i];
            }

            for (let i = 1; i <= 2; i++) {//11
                 document.querySelector("#texto"+i).innerHTML = data[0]['texto'+i];
            }

        }
    })
    .catch(error => {
        // Manipula erros durante a solicitação
        console.error('Erro durante a solicitação:', error);
  });
</script>