<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar Siglas de Cursos</h3>
        <a href="<?= URL_BASE ?>siglaCurso/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo Professor</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome Sigla</th>
                    <th>Curso</th>
                    <th>Laboratorio</th>
                    <th>Idade MIN</th>
                    <th>Max Alunos</th>
                    <th>Avaliacao</th>
                    <th>Professor</th>
                    <th>CH</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($siglaCurso as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['nome_sigla']; ?></td>
                        <td><?= $linha['nome_curso']; ?></td>
                        <td><?= $linha['lab_sigla']; ?></td>
                        <td><?= $linha['idade_min_sigla']; ?></td>
                        <td><?= $linha['max_aluno_sigla']; ?></td>
                        <td><?= $linha['avaliacao_sigla']; ?></td>
                        <td><?= $linha['nome_professor']; ?></td>
                        <td><?= $linha['carga_horaria_sigla']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>siglaCurso/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>siglaCurso/desativar" class="btn btn-danger bg-danger">
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