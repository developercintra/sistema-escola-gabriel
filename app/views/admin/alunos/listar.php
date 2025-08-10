<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar alunos</h3>
        <a href="<?= URL_BASE ?>alunos/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo aluno</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                function mascararCPF($cpf)
                {
                    $cpf = preg_replace('/\D/', '', $cpf);
                    return substr($cpf, 0, 3) . '.***.***-' . substr($cpf, -2);
                }
                ?>

                <?php foreach ($alunos as $linha): ?>
                    <tr class="align-middle">
                        <td>
                            <a href="#">
                                <img src="#"
                                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; cursor: pointer;"
                                    alt="<?= $linha['alt_aluno']; ?>">
                            </a>
                        </td>
                        <td><?= $linha['nome_aluno']; ?></td>
                        <td><?= mascararCPF($linha['cpf_aluno']); ?></td>
                        <td><?= $linha['email_aluno']; ?></td>
                        <td><?= $linha['telefone1_aluno']; ?></td>
                        <td><?= $linha['cep_aluno']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>alunos/editar/<?= $linha['id_aluno']; ?>" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="<?= URL_BASE ?>alunos/desativar" method="POST" style="display:inline;" onsubmit="return confirmarDesativacao()">
                                <input type="hidden" name="id_aluno" value="<?= $linha['id_aluno']; ?>">
                                <button type="submit" class="btn btn-danger bg-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                            <script>
                                function confirmarDesativacao() {
                                    return confirm('Tem certeza que deseja desativar este aluno?');
                                }
                            </script>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>