$(document).ready(function() {
    
    /*** HOME ***/
    $('html').on('click', function() {
        $('#videoHome').trigger('play');
        $('#videoHome').prop("volume", 0);
    });
    /*** FIM HOME ***/

    /*** EMPREENDIMENTOS ***/
    var owl1 = $('#carouselEmpreendimentos');
    owl1.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 2,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximo').on('click', function() {
        owl1.trigger('next.owl.carousel');
    });
    $('#btnAnterior').on('click', function() {
        owl1.trigger('prev.owl.carousel');
    });
    /*** FIM EMPREENDIMENTOS ***/

    /*** FEEDBACKS ***/
    var owl2 = $('#carouselFeedBacks');
    owl2.owlCarousel({
        stagePadding: 50,
        loop:true,
        margin: 10,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 3,
                nav: false
            },
            1000:{
                items: 3,
                nav: false,
                loop: false
            }
        }
    });
    /*** FIM FEEDBACKS ***/

    /*** EMPREENDIMENTOS ENTREGUES ***/
    var owl3 = $('#carouselEmpreendimentosEntregues');
    owl3.owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 70,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 3,
                nav: false
            },
            1000:{
                items: 3,
                nav: false,
                loop: false
            }
        }
    });
    $('#btnProximoEmpreendimentosEntregues').on('click', function() {
        owl3.trigger('next.owl.carousel');
    });
    $('#btnAnteriorEmpreendimentosEntregues').on('click', function() {
        owl3.trigger('prev.owl.carousel');
    });
    /*** FIM EMPREENDIMENTOS ENTREGUES  ***/

    /*** EMPREENDIMENTO  ***/
    var owl4 = $('#carouselPlantas');
    owl4.owlCarousel({
        stagePadding: 0,
        loop: true,
        margin: 70,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 1,
                nav: false
            },
            1000:{
                items: 1,
                nav: false,
                loop: false
            }
        }
    });
    $('#btnProximoPlantas').on('click', function() {
        owl4.trigger('next.owl.carousel');
    });
    $('#btnAnteriorPlantas').on('click', function() {
        owl4.trigger('prev.owl.carousel');
    });

    
    var owl5 = $('#carouselApartamentosDecorados');
    owl5.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 2,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximoApartamentosDecorados').on('click', function() {
        owl5.trigger('next.owl.carousel');
    });
    $('#btnAnteriorApartamentosDecorados').on('click', function() {
        owl5.trigger('prev.owl.carousel');
    });

    var owl6 = $('#carouselConhecaRegiao');
    owl6.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 1,
                nav: false
            },
            1000:{
                items: 1,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximoConhecaRegiao').on('click', function() {
        owl6.trigger('next.owl.carousel');
    });
    $('#btnAnteriorConhecaRegiao').on('click', function() {
        owl6.trigger('prev.owl.carousel');
    });

    var owl7 = $('#carouselAreasComuns');
    owl7.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 2,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximoAreasComuns').on('click', function() {
        owl7.trigger('next.owl.carousel');
    });
    $('#btnAnteriorAreasComuns').on('click', function() {
        owl7.trigger('prev.owl.carousel');
    });

    var owl8 = $('#carouselEquipe');
    owl8.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 1,
                nav: false
            },
            1000:{
                items: 1,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximoEquipe').on('click', function() {
        owl8.trigger('next.owl.carousel');
    });
    $('#btnAnteriorEquipe').on('click', function() {
        owl8.trigger('prev.owl.carousel');
    });
    
    var owl9 = $('#carouselEvolucaoObra');
    owl9.owlCarousel({
        stagePadding: 0,
        loop:true,
        margin: 0,
        responsiveClass: true,
        dots: false,
        responsive:{
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 1,
                nav: false
            },
            1000:{
                items: 1,
                nav: false,
                loop: false
            }
        }
    });

    $('#btnProximoEvolucaoObra').on('click', function() {
        owl9.trigger('next.owl.carousel');
    });
    $('#btnAnteriorEvolucaoObra').on('click', function() {
        owl9.trigger('prev.owl.carousel');
    });
    
    /*** FIM EMPREENDIMENTO  ***/

});