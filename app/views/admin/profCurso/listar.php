<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar Professores de Cursos</h3>
        <a href="<?= URL_BASE ?>profCurso/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo Professor</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Professor</th>
                    <th>Curso</th>
                    <th>Inicio Curso</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($profCurso as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['nome_professor']; ?></td>
                        <td><?= $linha['nome_curso']; ?></td>
                        <td><?= $linha['data_inicio_curso']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>profCurso/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>profCurso/desativar" class="btn btn-danger bg-danger">
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