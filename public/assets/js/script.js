$(document).ready(function(){
    // Inicializa o WOW.js para animações
    if (typeof WOW !== 'undefined') {
        new WOW().init();
    }
    
    // GALERIA SLICK
    $('.galeria').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
    
    // Confirma que o carrossel foi inicializado
    console.log('Carrossel inicializado');
});




    document.addEventListener('DOMContentLoaded', function() {
        const btnVoltarTopo = document.getElementById('btnVoltarTopo');
        
        // Mostrar ou esconder o botão baseado na posição de rolagem
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                btnVoltarTopo.classList.add('visivel');
            } else {
                btnVoltarTopo.classList.remove('visivel');
            }
        });
        
        // Função para voltar ao topo quando o botão for clicado
        btnVoltarTopo.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });

