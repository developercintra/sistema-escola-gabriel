<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar notas</h3>
        <a href="<?= URL_BASE ?>notas/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Nova Nota</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID matricula</th>
                    <th>idprofessor</th>
                    <th>Nota</th>
                    <th>Data nota</th>
                    <th>Obs nota</th>
                    <th>Tipo da nota</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($notas as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['id_matricula']; ?></td>
                        <td><?= $linha['id_professor']; ?></td>
                        <td><?= $linha['nota']; ?></td>
                        <td><?= $linha['data_nota']; ?></td>
                        <td><?= $linha['obs_nota']; ?></td>
                        <td><?= $linha['tipo_nota']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>notas/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>notas/desativar" class="btn btn-danger bg-danger">
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