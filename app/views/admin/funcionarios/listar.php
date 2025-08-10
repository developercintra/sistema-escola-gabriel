<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar funcionarios</h3>
        <a href="<?= URL_BASE ?>funcionarios/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo funcionario</i>
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
                    <th>Cargo</th>
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

                <?php foreach ($funcionarios as $linha): ?>
                    <tr class="align-middle">
                        <td>
                            <a href="#">
                                <img src="#" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; cursor: pointer;" alt="<?= $linha['alt_funcionario']; ?>">
                            </a>
                        </td>
                        <td><?= $linha['nome_funcionario']; ?></td>
                        <td><?= mascararCPF($linha['cpf_funcionario']); ?></td>
                        <td><?= $linha['email_funcionario']; ?></td>
                        <td><?= $linha['telefone1_funcionario']; ?></td>
                        <td><?= $linha['cargo_funcionario']; ?></td>
                        <td><?= $linha['cep_funcionario']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>funcionarios/editar/<?= $linha['id_funcionario'] ?>" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>funcionarios/desativar/<?= $linha['id_funcionario'] ?>" class="btn btn-danger bg-danger">
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