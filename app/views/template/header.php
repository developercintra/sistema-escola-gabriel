<header class="site sofast">
        <div>
            <div>
                <a href=""><i class="fa-solid fa-phone fa-rotate-by fa-xs"
                        style="color: #ffffff; --fa-rotate-angle: 25deg;"></i>+55 11 91234-5678</a>
                <a href=""><i class="fa-solid fa-location-dot" style="color: #ffffff;"></i>AV.PAULISTA, 1000- SÃO
                    PAULO,SP,BRASIL</a>
            </div>
            <div>
                <h3>ENCONTRE-NOS EM:</h3>
                <a href=""><i class="fa-brands fa-facebook-f fa-xs" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-instagram fa-xs" style="color: #ffffff;"></i></a>
                <a href=""><i class="fa-brands fa-linkedin fa-xs" style="color: #ffffff;"></i></a>
            </div>
        </div>
        <div>
            <div>
                <h1><a href="#"><img src="assets/img/icon/logo.png" alt=""></a></h1>
            </div>
            <div class="menu-header">
            <nav>
                <ul class="menu me-5">
                    <li><a href="home">Inicio</a></li>
                    <li class="me-2 ms-2">
                        <a href="curso">Cursos</a>
                    <ul class="submenu">
                        <li><a href="frontend">Frontend</a></li>
                        <li><a href="backend">Backend</a></li>
                        <li><a href="datascience">Data Science</a></li>
                    </ul>
                    </li>
                    <li class="me-2 ms-2">
                        <a href="sobre">Sobre</a>
                    <ul class="submenu">
                        <li><a href="unidade">Unidade</a></li>
                        <li><a href="instrutores">Instrutores</a></li>
                        </ul>
                        </li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </nav>
                <div class="btn-header">
                    <div class="login-header">
                        <a href="login" id="abrirLogin" class="header-btn-entrar">
                            <i class="fa-solid fa-user fa-lg"style="color: #753b9d;"></i>
                        ENTRAR
                    </a></div>
                    <div class="logon-header">
                        <a href="cadastrar" class="header-btn-cad">
                            <i class="fa-solid fa-users fa-lg"style="color: #ffffff;"></i>
                            CADATRAR-SE
                        </a></div>
                </div>
                <div id="loginModal" class="modal-login" style="display:none;">
                        <div class="modal-login-content">
                            <span class="fechar"></span>
                            <form method="POST" action="login/entrar">
                                <label for="email">Usuário ou E-mail</label>
                                <input type="text" id="email" name="email" required>
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" required>
                                <button type="submit">Entrar</button>
                            </form>
                           
                        </div>
                    </div>
            </div>
        </div>

        <style>
     .submenu {
        display: none; /* O submenu fica oculto por padrão */
        list-style: none;
        padding-left: 0;
        margin-top: -15px;
        position: absolute;
        background-color: white;
        box-shadow: 0 2px 5px rgba(255, 255, 255, 0.2);
        margin-top: 5px;
        z-index: 10;
        width: 180px; /* Ajuste o tamanho do submenu conforme necessário */
    }

    /* Mostrar o submenu quando o item do menu for hover */
    .menu li:hover .submenu {
        display: block; /* Exibe o submenu quando o mouse passa sobre o item */
    }

    /* Estilo dos itens do submenu */
    .submenu li {
        margin-top: 5px;
    }

    .submenu li a {
        text-decoration: none;
        color: #000;
        padding: 5px 10px;
        display: block;
    }

    .submenu li a:hover {
        color:rgb(255, 255, 255);
        background-color:rgb(47, 18, 212);
    }

    /* Garantir que o item do menu tenha um posicionamento relativo */
    .menu li {
        position: relative;
    }

    /* Estilo para o menu principal */
    .menu {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .menu li a {
        text-decoration: none;
        color: #fff;
        font-size: 1.3em;
    }
    .submenu li a {
        color: #000;
    }
</style>

        <script>
    // Selecionando os itens de menu que possuem submenus
    const menuItems = document.querySelectorAll('.menu > li');

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            const submenu = item.querySelector('.submenu');
            if (submenu) {
                submenu.style.display = 'block';
            }
        });

        item.addEventListener('mouseleave', () => {
            const submenu = item.querySelector('.submenu');
            if (submenu) {
                submenu.style.display = 'none';
            }
        });
    });
</script>
    </header>