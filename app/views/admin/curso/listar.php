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
        <h3 class="card-title">Listar Cursos</h3>
        <a href="<?= URL_BASE ?>curso/criar" class="btn btn-success ms-auto">
            <i class="bi bi-plus">Novo Curso</i>
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Nível</th>
                    <th>Modalidade</th>
                    <th>Valor</th>
                    <th>CH</th>
                    <th>Área</th>
                    <th>Requisito</th>
                    <th>Status</th>
                    <th>Publicar</th>
                    <th>Editar</th>
                    <th>Desativar</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($cursos as $linha): ?>
                    <tr class="align-middle">
                        <td>
                            <a href="<?= URL_BASE ?>upload/curso/<?= $linha['foto_curso']; ?>" data-lightbox="curso<?= $linha['id_curso']; ?>" data-title="<?= $linha['nome_curso']; ?>">
                                <img src="<?= URL_BASE ?>upload/curso/<?= $linha['foto_curso']; ?>"
                                    style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; cursor: pointer;">
                            </a>
                        </td>
                        <td><?= $linha['nome_curso']; ?></td>
                        <td><?= $linha['nivel_curso']; ?></td>
                        <td><?= $linha['modalidade_curso']; ?></td>
                        <td>R$ <?= $linha['valor_curso']; ?></td>
                        <td><?= $linha['carga_horaria_curso']; ?></td>
                        <td><?= $linha['area_curso']; ?></td>
                        <td><?= $linha['pre_requisito_curso']; ?></td>
                        <td><?= $linha['status_curso']; ?></td>
                        <td style="text-align: center;">
                            <input
                                class="form-check-input toggle-status"
                                type="checkbox"
                                role="switch"
                                data-id="<?= $linha['id_curso'] ?>"
                                <?= $linha['status_curso'] === 'ATIVO' ? 'checked' : '' ?>>
                        </td>
                        <td>
                            <a href="<?= URL_BASE ?>curso/editar/<?= $linha['id_curso']; ?>" class="btn btn-warning bg-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <form action="<?= URL_BASE ?>curso/desativar" method="POST" style="display:inline;" onsubmit="return confirmarDesativacao()">
                                <input type="hidden" name="id_curso" value="<?= $linha['id_curso']; ?>">
                                <button type="submit" class="btn btn-danger bg-danger">
                                    <i class="bi bi-trash3-fill"></i>
                                </button>
                            </form>
                            <script>
                                function confirmarDesativacao() {
                                    return confirm('Tem certeza que deseja desativar este curso?');
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


<script>
    document.querySelectorAll('.toggle-status').forEach(input => {
        input.addEventListener('change', function() {
            const id = this.dataset.id;
            const status = this.checked ? 'ATIVO' : 'Pendente';

            //requisição AJAX com fetch
            fetch('<?= URL_BASE ?>curso/atualizarStatus', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        id_curso: id,
                        status_curso: status
                    })
                })

                .then(response => response.json())
                .then(data => {
                    if (!data.sucesso) {
                        alert('Erro ao atualizar status');
                        this.checked = !this.checked
                    }
                })

                .catch(() => {
                    alert('Erro de comunicação!')
                })
        });
    });
</script>