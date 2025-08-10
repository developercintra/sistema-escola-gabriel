<h1>Editar Empresa</h1>
<p>Preencha apenas os campos que realmente quer editar da empresa.</p>

<?php if (isset($_GET['sucesso']) && $_GET['sucesso'] == 'true'): ?>
    <script>
        alert("Empresa atualizada com sucesso!");
    </script>
<?php endif; ?>

<form action="<?= URL_BASE ?>api/AtualizarEmpresa/<?= $empresa['id_empresa'] ?>" method="POST">
    <input type="hidden" name="_method" value="PATCH">
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
                <td>Nome empresa</td>
                <td><?= $empresa['nome_empresa'] ?></td>
                <td><input type="text" name="nome_empresa" class="form-control" placeholder="Nova Nome empresa"></td>
            </tr>
            <tr>
                <td>Nome Fantasia</td>
                <td><?= $empresa['fantasia_empresa'] ?></td>
                <td><input type="text" name="fantasia_empresa" class="form-control" placeholder="Novo Nome Fantasia"></td>
            </tr>
            <tr>
                <td>Tipo</td>
                <td><?= $empresa['tipo_empresa'] ?></td>
                <td><input type="text" name="tipo_empresa" class="form-control" placeholder="Novo Tipo"></td>
            </tr>
            <tr>
                <td>CNPJ</td>
                <td><?= $empresa['cnpj_empresa'] ?></td>
                <td><input type="text" name="cnpj_empresa" class="form-control" placeholder="Novo CNPJ"></td>
            </tr>
            <tr>
                <td>Inscrição Estadual</td>
                <td><?= $empresa['inscr_est_empresa'] ?></td>
                <td><input type="text" name="inscr_est_empresa" class="form-control" placeholder="Nova Inscrição Estadual"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $empresa['email_empresa'] ?></td>
                <td><input type="email" name="email_empresa" class="form-control" placeholder="Novo Email"></td>
            </tr>
            <tr>
                <td>Telefone</td>
                <td><?= $empresa['telefone1_empresa'] ?></td>
                <td><input type="text" name="telefone1_empresa" class="form-control" placeholder="Novo Telefone"></td>
            </tr>
            <tr>
                <td>CEP</td>
                <td><?= $empresa['cep_empresa'] ?></td>
                <td><input type="text" name="cep_empresa" class="form-control" placeholder="Novo CEP"></td>
            </tr>
            <tr>
                <td>Endereço</td>
                <td><?= $empresa['endereco_empresa'] ?></td>
                <td><input type="text" name="endereco_empresa" class="form-control" placeholder="Novo Endereço"></td>
            </tr>
            <tr>
                <td>Número</td>
                <td><?= $empresa['numero_empresa'] ?></td>
                <td><input type="text" name="numero_empresa" class="form-control" placeholder="Novo Número"></td>
            </tr>
            <tr>
                <td>Complemento</td>
                <td><?= $empresa['complemento_empresa'] ?></td>
                <td><input type="text" name="complemento_empresa" class="form-control" placeholder="Novo Complemento"></td>
            </tr>
            <tr>
                <td>Bairro</td>
                <td><?= $empresa['bairro_empresa'] ?></td>
                <td><input type="text" name="bairro_empresa" class="form-control" placeholder="Novo Bairro"></td>
            </tr>
            <tr>
                <td>Cidade</td>
                <td><?= $empresa['cidade_empresa'] ?></td>
                <td><input type="text" name="cidade_empresa" class="form-control" placeholder="Nova Cidade"></td>
            </tr>
            <tr>
                <td>Estado</td>
                <td><?= $empresa['estado_empresa'] ?></td>
                <td><input type="text" name="estado_empresa" class="form-control" placeholder="Novo Estado"></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-success">Salvar Alterações</button>
</form>