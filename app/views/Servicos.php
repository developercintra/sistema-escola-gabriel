<?php require_once('template/head.php')?>
<body id="servicos">

<?php require_once('template/header.php')?>

<?php require_once('template/banner.php')?>

    <section class="categorias">
            <div class="site">
                <div>
                    <h3 class="effra-regular">Todos os Cursos</h3>
                    <h2 class="effra">Principais Cursos de Desenvolvimento</h2>
                </div>
                <div class="cards-categoria effra-regular">

                <?php foreach ($cursos as $linha): ?>
                    <?php $link = $this->gerarLinkCurso($linha['nome_curso']); ?>
                    <div class="card-categoria">
                        <div class="pad-categorias">
                            <img src="<?php URL_BASE ?>upload/curso/<?= $linha['foto_curso']; ?>" alt=<?= $linha['alt_curso']; ?>>
                            <a href="curso/detalhe/<?= $link ?>">
                            <h2><?= $linha['nome_curso']; ?></h2>
                            </a>
                            <p><?= $linha['carga_horaria_curso']. ' Horas e R$ '. $linha['valor_curso']; ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
        </section>

<?php require_once('template/cursos.php')?>

<?php require_once('template/sobre.php')?>  

                    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- SLICK JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- LITY JS -->
<script src="https://cdn.jsdelivr.net/npm/lity@2.4.1/dist/lity.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>