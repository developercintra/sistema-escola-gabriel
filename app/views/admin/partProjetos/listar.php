<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar Participações em Projetos</h3>
        <a href="<?= URL_BASE ?>partProjetos/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Nova Participação</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Projeto</th>
                    <th>Aluno</th>
                    <th>Nota</th>
                    <th>OBS</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($partProjetos as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['nome_projeto']; ?></td>
                        <td><?= $linha['nome_aluno']; ?></td>
                        <td><?= $linha['nota_participacao_projeto']; ?></td>
                        <td><?= $linha['obs_participacao_projeto']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>partProjetos/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>partProjetos/desativar" class="btn btn-danger bg-danger">
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