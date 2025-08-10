<h1>Editar funcionarios</h1>
<p>Preencha apenas os campos que realmente quer editar do funcionario.</p>
<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'true'): ?>
    <script>
        alert("Funcionario atualizado com sucesso!");
    </script>
<?php endif; ?>

<?php foreach ($funcionario as $linha): ?>
    <form action="<?= URL_BASE ?>api/AtualizarFuncionario/<?= $linha['id_funcionario'] ?>" method="POST">
        <input type="hidden" name="_method" value="PATCH"> <!-- se estiver usando método via POST com spoof -->
        <table class="table">
            <thead>
                <tr>
                    <th>Campo</th>
                    <th>Atual</th>
                    <th>Novo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome</td>
                    <td><?= $linha['nome_funcionario'] ?></td>
                    <td><input type="text" name="nome_funcionario" class="form-control" placeholder="Novo nome"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $linha['email_funcionario'] ?></td>
                    <td><input type="email" name="email_funcionario" class="form-control" placeholder="Novo email"></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td><?= $linha['telefone1_funcionario'] ?></td>
                    <td><input type="text" name="telefone1_funcionario" class="form-control" placeholder="Novo telefone"></td>
                </tr>
                <tr>
                    <td>CEP</td>
                    <td><?= $linha['cep_funcionario'] ?></td>
                    <td><input type="text" name="cep_funcionario" class="form-control" placeholder="Novo CEP"></td>
                </tr>
                <tr>
                    <td>Endereco</td>
                    <td><?= $linha['endereco_funcionario'] ?></td>
                    <td><input type="text" name="endereco_funcionario" class="form-control" placeholder="Novo endereco"></td>
                </tr>
                <tr>
                    <td>Numero</td>
                    <td><?= $linha['numero_funcionario'] ?></td>
                    <td><input type="text" name="numero_funcionario" class="form-control" placeholder="Novo numero"></td>
                </tr>
                <tr>
                    <td>Cargo</td>
                    <td><?= $linha['cargo_funcionario'] ?></td>
                    <td><input type="text" name="cargo_funcionario" class="form-control" placeholder="Novo cargo"></td>
                </tr>
                <tr>
                    <td>Formação Academica</td>
                    <td><?= $linha['form_acad_funcionario'] ?></td>
                    <td><input type="text" name="form_acad_funcionario" class="form-control" placeholder="Nova formação"></td>
                </tr>
                <tr>
                    <td>Salario</td>
                    <td><?= $linha['salario_funcionario'] ?></td>
                    <td><input type="text" name="salario_funcionario" class="form-control" placeholder="Novo salario"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>

<?php endforeach; ?>