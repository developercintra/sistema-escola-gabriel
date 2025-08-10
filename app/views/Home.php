<?php require_once('template/head.php')?>

<body>
<?php require_once('template/header.php')?>
    <main>
    <?php require_once('template/banner.php')?>
    
    <?php require_once('template/carrossel.php')?>

        <section class="categorias">
            <div class="site">
                <div>
                    <h3 class="effra-regular">CURSOS POPULARES</h3>
                    <h2 class="effra">Principais Cursos de Desenvolvimento</h2>
                </div>
                <div class="cards-categoria effra-regular">
                <?php foreach ($cursos as $linha): ?>
                    <div class="card-categoria">
                        <div class="pad-categorias">
                            <img src="<?php URL_BASE ?>upload/curso/<?php echo $linha['foto_curso']; ?>" alt=<?php echo $linha['alt_curso']; ?>>
                            <h2><?php echo $linha['nome_curso']; ?></h2>
                            <p><?php echo $linha['carga_horaria_curso']. ' Horas e R$ '. $linha['valor_curso']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="btn-categoria sofast">
                    <a href="curso"><span>VER TODOS CURSOS</span></a></div>
                </div>
        </section>

    <?php require_once('template/cursos.php')?>

    <?php require_once('template/sobre.php')?>  

    <div class="instructor-section padding-tb section-bg">
        <div class="container">
            <div class="section-header text-center">
                <span class="subtitle">Instrutores Especializados</span>
                <h2 class="title">Aulas ministradas por criadores reais</h2>
            </div>
            <div class="section-wrapper">
                <div class="row g-4 justify-content-center row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="https://escola.360criativo.com.br/assets/img/professor/Carlos-Silva.png" alt="Carlos-Silva">
                                </div>
                                <div class="instructor-content">
                                    <a href="#">
                                        <h4>Emilee Logan</h4>
                                    </a>
                                    <p>Mestrado em Educação</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 cursos</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 alunos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="https://escola.360criativo.com.br/assets/img/professor/Lucas-Fernandes.png" alt="Lucas-Fernandes">
                                </div>
                                <div class="instructor-content">
                                    <a href="#">
                                        <h4>Donald Logan</h4>
                                    </a>
                                    <p>Mestrado em Educação</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 cursos</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 alunos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="https://escola.360criativo.com.br/assets/img/professor/Mariana-Rocha.png" alt="Mariana-Rocha">
                                </div>
                                <div class="instructor-content">
                                    <a href="#">
                                        <h4>Oliver Porter</h4>
                                    </a>
                                    <p>Mestrado em Educação</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 cursos</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 alunos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="instructor-item">
                            <div class="instructor-inner">
                                <div class="instructor-thumb">
                                    <img src="https://escola.360criativo.com.br/assets/img/professor/Mariana-Rocha.png" alt="Mariana-Rocha">
                                </div>
                                <div class="instructor-content">
                                    <a href="#">
                                        <h4>Nahla Jones</h4>
                                    </a>
                                    <p>Mestrado em Educação</p>
                                    <span class="ratting">
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                        <i class="icofont-ui-rating"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="instructor-footer">
                                <ul class="lab-ul d-flex flex-wrap justify-content-between align-items-center">
                                    <li><i class="icofont-book-alt"></i> 08 cursos</li>
                                    <li><i class="icofont-users-alt-3"></i> 30 alunos</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center footer-btn">
                    <p>Quer ajudar as pessoas a aprender, crescer e alcançar mais na vida?<a href="#">Torne-se um instrutor</a></p>
                </div>
            </div>
        </div>
    </div>

    </main>

    <!-- RODAPÉ -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <h2>FuturEdu</h2>
                <p>Transforme seu conhecimento com a melhor plataforma de ensino.</p>
            </div>
            <div class="footer-links">
                <h2>Links Rápidos</h2>
                <ul>
                    <li><a href="#">Início</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h2>Contato</h2>
                <p><i class="icofont-tack-pin"></i> Av. Paulista, 1000 - São Paulo, SP</p>
                <p><i class="icofont-phone"></i> +55 11 91234-5678</p>
                <p><i class="icofont-email"></i> contato@futuredu.com</p>
            </div>
            <div class="footer-social">
                <h2>Nos siga</h2>
                <a href="#"><i class="icofont-facebook"></i></a>
                <a href="#"><i class="icofont-instagram"></i></a>
                <a href="#"><i class="icofont-linkedin"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 FuturEdu. Todos os direitos reservados.</p>
            <p>Desenvolvido por Alessandro Palmeira</p>
        </div>
    </footer>
    
    <button id="btnVoltarTopo" class="btn-voltar-topo">
        <i class="fa-solid fa-angle-up fa-xs"></i>
    </button>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SLICK JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- LITY JS -->
    <script src="https://cdn.jsdelivr.net/npm/lity@2.4.1/dist/lity.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/animacao.js"></script>
</body>

</html>

?>