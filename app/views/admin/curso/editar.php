<h1>Editar Curso</h1>
<p>Altere os campos desejados e clique em "Salvar Alterações".</p>

<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'true'): ?>
    <script>
        alert("Curso atualizado com sucesso!");
    </script>
<?php endif; ?>

<form action="<?= URL_BASE ?>curso/editar/<?= $curso['id_curso'] ?>" method="POST" enctype="multipart/form-data">
    <div class="row mb-3">
        <div class="col-md-4">
            <label>Foto Atual</label><br>
            <img id="img-form" src="<?= URL_BASE ?>upload/curso/<?= $curso['foto_curso'] ?>" alt="Foto do Curso" style="width:100px; height:100px; object-fit:cover; border-radius:8px;">
        </div>
        <div class="col-md-8">
            <label for="foto_curso">Nova Foto (opcional)</label>
            <input type="file" id="foto_curso" name="foto_curso" class="form-control" accept="image/*">
        </div>
    </div>



    <div class="row mb-3">
        <div class="col-md-6">
            <label>Nome do Curso</label>
            <input type="text" name="nome_curso" class="form-control" value="<?= $curso['nome_curso'] ?>">
        </div>

        <div class="col-md-6">
            <label>Nível</label>
            <select name="nivel_curso" class="form-control">
                <option value="<?= $curso['nivel_curso'] ?>">Atual: <?= $curso['nivel_curso'] ?></option>
                <option value="Técnico">Técnico</option>
                <option value="Tecnólogo">Tecnólogo</option>
                <option value="Graduação">Graduação</option>
                <option value="Pós graduação">Pós graduação</option>
                <option value="livre">Livre</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Carga Horária</label>
            <input type="text" name="carga_horaria_curso" class="form-control" value="<?= $curso['carga_horaria_curso'] ?>">
        </div>

        <div class="col-md-6">
            <label>Modalidade</label>
            <select name="modalidade_curso" class="form-control">
                <option value="Presencial" <?= $curso['modalidade_curso'] == 'Presencial' ? 'selected' : '' ?>>Presencial</option>
                <option value="Online" <?= $curso['modalidade_curso'] == 'Online' ? 'selected' : '' ?>>Online</option>
                <option value="Híbrido" <?= $curso['modalidade_curso'] == 'Híbrido' ? 'selected' : '' ?>>Híbrido</option>
            </select>
        </div>
    </div>

    <div class="mb-3">
        <label>Descrição</label>
        <textarea name="descricao_curso" class="form-control" rows="3"><?= $curso['descricao_curso'] ?></textarea>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Área do Curso</label>
            <input type="text" name="area_curso" class="form-control" value="<?= $curso['area_curso'] ?>">
        </div>

        <div class="col-md-6">
            <label>Pré-Requisito</label>
            <input type="text" name="pre_requisito_curso" class="form-control" value="<?= $curso['pre_requisito_curso'] ?>">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label>Valor (R$)</label>
            <input type="text" name="valor_curso" class="form-control" value="<?= $curso['valor_curso'] ?>">
        </div>

        <div class="col-md-6">
            <label>Status</label>
            <select name="status_curso" class="form-control">
                <option value="Ativo" <?= $curso['status_curso'] == 'Ativo' ? 'selected' : '' ?>>Ativo</option>
                <option value="Inativo" <?= $curso['status_curso'] == 'Inativo' ? 'selected' : '' ?>>Inativo</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Salvar Alterações</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const visualizarImg = document.getElementById('img-form');
        const arquivo = document.getElementById('foto_curso');

        arquivo.addEventListener('change', function() {
            if (arquivo.files && arquivo.files[0]) {
                let render = new FileReader();
                render.onload = function(e) {
                    visualizarImg.src = e.target.result;
                }
                render.readAsDataURL(arquivo.files[0]);
            }
        });
    });
</script>
