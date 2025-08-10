document.addEventListener("DOMContentLoaded", function () {
    let header = document.getElementById("header__topo-fixo");
    let limiteScroll = 480;

    window.addEventListener("scroll", function () {
        let scrollY = window.scrollY;

        if (scrollY >= limiteScroll) {
            header.classList.add("fundo-escuro");
        } else {
            header.classList.remove("fundo-escuro");
        }
    });
});


function moverCarrossel(direcao) {
    const container = document.querySelector(".carrossel-imagens");
    const imagens = document.querySelectorAll(".carrossel-imagens img");

    if (imagens.length === 0) return;

    const larguraImagem = imagens[0].offsetWidth + 20;

    indice += direcao;

    if (indice < 0) {
        indice = imagens.length - 1;
    } else if (indice >= imagens.length) {
        indice = 0;
    }

    container.style.transition = "transform 0.5s ease-in-out";
    container.style.transform = `translateX(${-indice * larguraImagem}px)`;
}

  $(document).ready(function(){
    $('.carrossel-imagens').slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      dots: false,
      infinite: true,
      pauseOnHover: false,
    });
  });

  document.addEventListener('DOMContentLoaded', function() {
    const btnAbrir = document.getElementById('abrirLogin');
    const modal = document.getElementById('loginModal');
    const btnFechar = modal.querySelector('.fechar');
    const abrirCadastro = document.getElementById('abrirCadastro');
    const cadastroBox = document.getElementById('cadastroBox');

    btnAbrir.addEventListener('click', function(e) {
        e.preventDefault();
        // Toggle: se estiver visível, fecha; se não, abre
        if (modal.style.display === 'block') {
            modal.style.display = 'none';
        } else {
            modal.style.display = 'block';
            cadastroBox.style.display = 'none';
        }
    });

    btnFechar.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    }

    abrirCadastro.addEventListener('click', function(e) {
        e.preventDefault();
        cadastroBox.style.display = 'block';
    });
});
