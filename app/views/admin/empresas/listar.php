<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['mensagem']) && isset($_SESSION['tipoMsg'])) {
    $msg = $_SESSION['mensagem'];
    $tipo = $_SESSION['tipoMsg'];
    // Exibir mensagem
    if ($tipo == 'success') {
        echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
    } elseif ($tipo == 'erro') {
        echo '<div class="alert alert-danger" role="alert">' . $msg . '</div>';
    }

    unset($_SESSION['mensagem']);
    unset($_SESSION['tipoMsg']);
}
?>

<div class="card mb-4">
    <div class="card-header d-flex">
        <h3 class="card-title">Listar Empresas</h3>
        <a href="<?= URL_BASE ?>empresas/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Nova Empresa</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome da unidade</th>
                    <th>CNPJ</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($empresas as $linha): ?>
                    <tr class="align-middle">
                        <td><?= $linha['fantasia_empresa']; ?></td>
                        <td><?= $linha['cnpj_empresa']; ?></td>
                        <td><?= $linha['email_empresa']; ?></td>
                        <td><?= $linha['telefone1_empresa']; ?></td>
                        <td><?= $linha['cep_empresa']; ?></td>
                        <td>
                            <a href="<?= URL_BASE ?>empresas/editar/<?= $linha['id_empresa']; ?>" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="<?= URL_BASE ?>empresas/desativar" method="POST" style="display:inline;" onsubmit="return confirmarDesativacao()">
                                <input type="hidden" name="id_empresa" value="<?= $linha['id_empresa']; ?>">
                                <button type="submit" class="btn btn-danger bg-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                            <script>
                                function confirmarDesativacao() {
                                    return confirm('Tem certeza que deseja desativar esta empresa?');
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