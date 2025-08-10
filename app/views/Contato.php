<?php require_once('template/head.php') ?>

<body id="contato">
    <?php require_once('template/header.php') ?>
    <main>
        <?php require_once('template/banner.php') ?>

        <section class="form-section container mt-5">
            <form class="formulario" action="contato/enviarEmail" method="POST">

                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Ex: Maria Santos" required>
                </div>

                <div>
                    <label class="mt-2" for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Ex: maria@gmail.com" required>
                </div>

                <div>
                    <label class="mt-2" for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="fone" placeholder="Ex: (99) 99999-9999" maxlength="15">
                </div>

                <div>
                    <label class="mt-2" for="assunto">Assunto:</label>
                    <input type="text" id="assunto" name="assunto">
                </div>

                <div>
                    <label class="mt-2" for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="msg" rows="5" required></textarea>
                </div>

                <div>
                    <input type="submit" value="Enviar Email">
                </div>
            </form>

            <p class="form-message container">

                <?php
                if (@$status == 'contato') {
                    echo $mensagem;
                }else if (@$status == 'erro'){
                    echo $nome . ', ' . $mensagem;
                }
                ?>

            </p>
        </section>

    </main>

    <button id="btnVoltarTopo" class="btn-voltar-topo">
        <i class="fa-solid fa-angle-up fa-xs"></i>
    </button>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- SLICK JS -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- LITY JS -->
    <script src="https://cdn.jsdelivr.net/npm/lity@2.4.1/dist/lity.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

    <script>
        document.getElementById('telefone').addEventListener('input', function(e) {
            let input = e.target;
            input.value = input.value
                .replace(/\D/g, '')
                .replace(/^(\d{2})(\d)/g, '($1) $2')
                .replace(/(\d{5})(\d)/, '$1-$2')
                .slice(0, 15);
        });
    </script>

    <script src="assets/js/script.js"></script>
</body>

</html>