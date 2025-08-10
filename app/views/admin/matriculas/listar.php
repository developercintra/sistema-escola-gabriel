<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar Matriculas</h3>
        <a href="<?= URL_BASE ?>matriculas/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Nova Matricula</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Data Matricula</th>
                    <th>Aluno</th>
                    <th>Curso</th>
                    <th>OBS</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($matricula as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['data_matricula']; ?></td>
                        <td><?= $linha['nome_aluno']; ?></td>
                        <td><?= $linha['nome_curso']; ?></td>
                        <td><?= $linha['obs_matricula']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>matriculas/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>matriculas/desativar" class="btn btn-danger bg-danger">
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