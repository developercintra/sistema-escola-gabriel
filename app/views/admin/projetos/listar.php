<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar projetos</h3>
        <a href="<?= URL_BASE ?>projetos/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo projeto</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>descrição</th>
                    <th>Professor</th>
                    <th>Curso</th>
                    <th>Inicio</th>
                    <th>Entrega</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($projetos as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['titulo_projeto']; ?></td>
                        <td><?= $linha['descricao_projeto']; ?></td>
                        <td><?= $linha['nome_professor']; ?></td>
                        <td><?= $linha['nome_curso']; ?></td>
                        <td><?= $linha['data_inicio_projeto']; ?></td>
                        <td><?= $linha['data_entrega_projeto']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>projetos/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>projetos/desativar" class="btn btn-danger bg-danger">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>