<div class="container-fluid ps-5 pe-5" id="footer">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 border-top">
                <div class="col-md-3 mb-2 d-flex align-items-center justify-content-center">
                    <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                    <img id="logoFooter">
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

                        <a id="link-facebook">
                            <img src="<?= Functions::urlBase('assets/icons/facebook.svg'); ?>" class="resize-height">
                        </a>

                        <a id="link-instagram">
                            <img src="<?= Functions::urlBase('assets/icons/instagram.svg'); ?>" class="resize-width">
                        </a>

                        <a id="link-linkedin">
                            <img src="<?= Functions::urlBase('assets/icons/linkedin.svg'); ?>" class="resize-height">
                        </a>

                        <a id="link-email">
                            <img src="<?= Functions::urlBase('assets/icons/email.svg') ?>" class="resize-width">
                        </a>

                        <a id="link-youtube">
                            <img src="<?= Functions::urlBase('assets/icons/youtube.svg'); ?>" class="resize-width">
                        </a>

                    </div>
        
                    <a id="link-portal-cliente" class="btn-portal-cliente">
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
    
    </script>

<script>
    siteRoot = window.location.origin;
    const urlfoot = siteRoot+'/requests/select.php?table=footer';
    console.log(url);
    fetch(urlfoot)
        .then(response => {
            if (!response.ok) {
                throw new Error(`Erro na solicitação: ${response.statusText}`);
            }
            return response.json();
        })
        .then(data => {
            if (data) {
                console.log(data);
                document.querySelector("#logoFooter").src = siteRoot + "/" +data[0]['logo'];
                document.querySelector("#link-facebook").href = data[0]['link_facebook'];
                document.querySelector("#link-instagram").href = data[0]['link_instagram'];
                document.querySelector("#link-linkedin").href = data[0]['link_linkedin'];
                document.querySelector("#link-email").href = data[0]['link_email'];
                document.querySelector("#link-youtube").href = data[0]['link_youtube'];
                document.querySelector("#link-portal-cliente").href = data[0]['link_portal_cliente'];
            }
        })
        .catch(error => {
            // Manipula erros durante a solicitação
            console.error('Erro durante a solicitação:', error);
        });
</script>

</html>