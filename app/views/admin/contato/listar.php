<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar contatos</h3>
        <a href="<?= URL_BASE ?>contato/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo Contato</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Assunto</th>
                    <th>Status</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($contatos as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['nome_Contato']; ?></td>
                        <td><?= $linha['email_Contato']; ?></td>
                        <td><?= $linha['telefone_Contato']; ?></td>
                        <td><?= $linha['assunto_Contato']; ?></td>
                        <td><?= $linha['status_Contato']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>contato/editar" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>contato/desativar" class="btn btn-danger bg-danger">
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