

        <?php require_once __DIR__ . '/header.php'; ?>

        <div class="container-fluid bg-primary" id="divVideoHome">
            <video autoplay class="w-100" id="videoHome">
                <source src="<?= Functions::urlBase('assets/videos/home.mp4'); ?>" type="video/mp4">
            </video>
        </div>

        <div class="container-fluid" id="divSetaHome">
            <img src="<?= Functions::urlBase('assets/icons/seta1.svg'); ?>">  
        </div>

        <div class="container-fluid" id="divEmpreendimentos">

            <h1 class="title text-white">Empreendimentos</h1>

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

            <h2 class="title text-white text-center mb-5">Histórias únicas de moradores únicos</h2>
            
            <div class="owl-carousel" id="carouselFeedBacks">
                
                <div>
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                        <div class="card-body">
                            <span class="text-feedback">Eu e minha família nos sentimos muito acolhidos e seguros com a experiência de investimento e compra de imóvel na PRC. O Nest635 é uma grande inovação para Maringá e região. Ficamos maravilhados com os detalhes de design e vegetação. Criativo e Moderno!</span>
                            <div class="infos-feedback">
                                <div class="image-feedback">
                                    <img src="<?= Functions::urlBase('assets/images/perfilFeedbacks.jpg'); ?>">
                                </div>
                                <div class="infos-person-feedback">
                                    <span class="name-person-feedback">Andressa Gomiero</span><br>
                                    <span class="empreendimentos-feedback">NEST</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                        <div class="card-body">
                            <span class="text-feedback">Eu e minha família nos sentimos muito acolhidos e seguros com a experiência de investimento e compra de imóvel na PRC. O Nest635 é uma grande inovação para Maringá e região. Ficamos maravilhados com os detalhes de design e vegetação. Criativo e Moderno!</span>
                            <div class="infos-feedback">
                                <div class="image-feedback">
                                    <img src="<?= Functions::urlBase('assets/images/perfilFeedbacks.jpg'); ?>">
                                </div>
                                <div class="infos-person-feedback">
                                    <span class="name-person-feedback">Andressa Gomiero</span><br>
                                    <span class="empreendimentos-feedback">NEST</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="card">
                        <img src="<?= Functions::urlBase('assets/icons/aspas.svg'); ?>" class="aspas">
                        <div class="card-body">
                            <span class="text-feedback">Eu e minha família nos sentimos muito acolhidos e seguros com a experiência de investimento e compra de imóvel na PRC. O Nest635 é uma grande inovação para Maringá e região. Ficamos maravilhados com os detalhes de design e vegetação. Criativo e Moderno!</span>
                            <div class="infos-feedback">
                                <div class="image-feedback">
                                    <img src="<?= Functions::urlBase('assets/images/perfilFeedbacks.jpg'); ?>">
                                </div>
                                <div class="infos-person-feedback">
                                    <span class="name-person-feedback">Andressa Gomiero</span><br>
                                    <span class="empreendimentos-feedback">NEST</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        
        </div>

        <?php require_once __DIR__ . '/footer.php'; ?>