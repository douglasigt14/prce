        <div class="container-fluid ps-5 pe-5" id="footer">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
                <div class="col-md-3 mb-2 d-flex align-items-center justify-content-center">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        <img src="<?= Functions::urlBase('assets/icons/logoPRCvertical.svg'); ?>" id="logoFooter">
                    </a>
                </div>
                <div class="col-md-2 mb-2 footer-sub-menu">
                    <h6>Home</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Carrers</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Mobile</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-2 footer-sub-menu">
                    <h6>Institucional</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Help/FAQ</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Press</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Affilates</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-2 footer-sub-menu">
                    <h6>Contato</h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Airlinefees</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Airline</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Low fare tips</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-2" id="divRedesSociais">

                    <div>

                        <a href="">
                            <img src="<?= Functions::urlBase('assets/icons/facebook.svg'); ?>" class="resize-height">
                        </a>

                        <a href="">
                            <img src="<?= Functions::urlBase('assets/icons/instagram.svg'); ?>" class="resize-width">
                        </a>

                        <a href="">
                            <img src="<?= Functions::urlBase('assets/icons/linkedin.svg'); ?>" class="resize-height">
                        </a>

                        <a href="">
                            <img src="<?= Functions::urlBase('assets/icons/email.svg') ?>" class="resize-width">
                        </a>

                        <a href="">
                            <img src="<?= Functions::urlBase('assets/icons/youtube.svg'); ?>" class="resize-width">
                        </a>

                    </div>
        
                    <a href="#" class="btn-portal-cliente">
                        Portal do cliente <img src="<?= Functions::urlBase('assets/icons/portalCliente.svg'); ?>" class="ms-1">
                    </a>

                </div>
            </footer>
        </div>
    </body>

    <script type="text/javascript" src="<?= Functions::urlBase('assets/jquery/jquery-3.7.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('assets/circular-progress/progresscircle.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/indigo-player@1/lib/indigo-player.js"></script>
    <script type="text/javascript" src="<?= Functions::urlBase('script.js'); ?>"></script>
    <script type="text/javascript">
    
    $(function(){
        $('.circlechart').circlechart();
    });
    
    const config = {
        autoplay: true,
        ui: {
            image: "<?= Functions::urlBase('assets/images/capaSobre.jpg'); ?>",
        },
        sources: [
            {
                type: "mp4",
                src: "<?= Functions::urlBase('assets/videos/home.mp4'); ?>",
            }
        ],
    };
    const element = document.getElementById('videoSobre');
    const player = IndigoPlayer.init(element, config);
    
    </script>

</html>