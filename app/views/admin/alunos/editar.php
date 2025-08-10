<h1>Editar aluno</h1> 
<p>Preencha apenas os campos que realmente quer editar do aluno.</p> 

<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'true'): ?>
    <script>
        alert("Aluno atualizado com sucesso!");
    </script>
<?php endif; ?>


<?php foreach ($aluno as $linha): ?>
    <form action="<?= URL_BASE ?>api/AtualizarAluno/<?= $linha['id_aluno'] ?>" method="POST">
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
                    <td><?= $linha['nome_aluno'] ?></td>
                    <td><input type="text" name="nome_aluno" class="form-control" placeholder="Novo nome"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $linha['email_aluno'] ?></td>
                    <td><input type="email" name="email_aluno" class="form-control" placeholder="Novo email"></td>
                </tr>
                <tr>
                    <td>Telefone</td>
                    <td><?= $linha['telefone1_aluno'] ?></td>
                    <td><input type="text" name="telefone1_aluno" class="form-control" placeholder="Novo telefone"></td>
                </tr>
                <tr>
                    <td>Endereco</td>
                    <td><?= $linha['endereco_aluno'] ?></td>
                    <td><input type="text" name="endereco_aluno" class="form-control" placeholder="Novo endereco"></td>
                </tr>
                <tr>
                    <td>Numero</td>
                    <td><?= $linha['numero_aluno'] ?></td>
                    <td><input type="text" name="numero_aluno" class="form-control" placeholder="Novo numero"></td>
                </tr>
                <tr>
                    <td>CEP</td>
                    <td><?= $linha['cep_aluno'] ?></td>
                    <td><input type="text" name="cep_aluno" class="form-control" placeholder="Novo CEP"></td>
                </tr>
                <tr>
                    <td>Nome Responsavel</td>
                    <td><?= $linha['nome_responsavel'] ?></td>
                    <td><input type="text" name="nome_responsavel" class="form-control" placeholder="Novo nome responsavel"></td>
                </tr>
                <tr>
                    <td>Email Responsavel</td>
                    <td><?= $linha['email_responsavel'] ?></td>
                    <td><input type="text" name="email_responsavel" class="form-control" placeholder="Novo email responsavel"></td>
                </tr>
                <tr>
                    <td>Telefone Responsavel</td>
                    <td><?= $linha['telefone_responsavel'] ?></td>
                    <td><input type="text" name="telefone_responsavel" class="form-control" placeholder="Novo telefone responsavel"></td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success">Salvar Alterações</button>
    </form>

<?php endforeach; ?>