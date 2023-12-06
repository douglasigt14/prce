<?php require_once __DIR__ . '/header.php'; ?>

<div class="container-fluid bg-primary" id="divVideoHome">
    <video autoplay poster="assets\images\capaSobre.jpg" class="w-100" id="videoHome">
        <source id="video" type="video/mp4">
    </video>
</div>

<div class="container-fluid" id="divSetaHome">
    <img src="<?= Functions::urlBase('assets/icons/seta1.svg'); ?>">
</div>

<div class="container-fluid" id="divEmpreendimentos">

<h1 id="titulo1" class="title text-white"></h1>

    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <span>Todos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span>Lançamentos</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span>Em Obras</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <span>Entregues</span>
            </a>
        </li>
    </ul>

    <div class="mt-5" id="divLoadEmpreendimentos">

        <div class="owl-carousel" id="carouselEmpreendimentos">

            <div>
                <a href="" class="link-empreendimento">
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                        <div class="card-body">
                            <span class="title-card">PALM 786</span>
                            <span class="status-card">Em Obras</span>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="" class="link-empreendimento">
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                        <div class="card-body">
                            <span class="title-card">PALM 786</span>
                            <span class="status-card">Em Obras</span>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="" class="link-empreendimento">
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                        <div class="card-body">
                            <span class="title-card">PALM 786</span>
                            <span class="status-card">Em Obras</span>
                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a href="" class="link-empreendimento">
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/images/projeto.jpg'); ?>" class="card-img-top">
                        <div class="card-body">
                            <span class="title-card">PALM 786</span>
                            <span class="status-card">Em Obras</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>

</div>

<div class="container-fluid">
    <div id="divBtns">
        <button id="btnAnterior" class="refletir">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
        </button>
        <button id="btnProximo">
            <img src="<?= Functions::urlBase('assets/icons/seta2.svg'); ?>">
        </button>
    </div>
</div>

<div class="container" id="divFeedBacks">

    <h2 id="titulo2" class="title text-white text-center mb-5"></h2>

    <div class="owl-carousel" id="carouselFeedBacks">

        <div>
            <div class="card">
                <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                <div class="card-body">
                    <span id="texto1" class="text-feedback"></span>
                    <div class="infos-feedback">
                        <div class="image-feedback">
                            <img id="imagem1">
                        </div>
                        <div class="infos-person-feedback">
                            <span id="nome1" class="name-person-feedback"></span><br>
                            <span id="empreendimento1" class="empreendimentos-feedback"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                <div class="card-body">
                    <span id="texto2" class="text-feedback"></span>
                    <div class="infos-feedback">
                        <div class="image-feedback">
                            <img id="imagem2">
                        </div>
                        <div class="infos-person-feedback">
                            <span id="nome2" class="name-person-feedback"></span><br>
                            <span id="empreendimento2" class="empreendimentos-feedback"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="card">
                <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                <div class="card-body">
                    <span id="texto3" class="text-feedback"></span>
                    <div class="infos-feedback">
                        <div class="image-feedback">
                            <img id="imagem3">
                        </div>
                        <div class="infos-person-feedback">
                            <span id="nome3" class="name-person-feedback"></span><br>
                            <span id="empreendimento3" class="empreendimentos-feedback"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php require_once __DIR__ . '/footer.php'; ?>

<script>
    const url1 = 'requests/select.php?table=home_data';

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
                document.querySelector("#video").src = data[0]['video'];
                document.querySelector("#titulo1").innerHTML = data[0]['titulo1'];
                document.querySelector("#titulo2").innerHTML = data[0]['titulo2'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

    const url2 = 'requests/select.php?table=comentarios';

    fetch(url2)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                console.log(data);
                //document.querySelector("#capa").innerHTML = data[0]['capa'];
                for (let i = 0; i <= 3; i++) {//3
                    document.querySelector("#texto" + (i + 1)).innerHTML = data[i]['texto'];
                    document.querySelector("#imagem" + (i + 1)).src = data[i]['imagem'];
                    document.querySelector("#nome" + (i + 1)).innerHTML = data[i]['nome'];
                    document.querySelector("#empreendimento" + (i + 1)).innerHTML = data[i]['nome_empreendimento'];
                }

            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });

</script>