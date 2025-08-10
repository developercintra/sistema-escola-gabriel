<h1>Criar funcionarios</h1>

<form action="#" method="POST" enctype="multipart/form-data" class="container p-4 rounded shadow-lg bg-light mt-4" style="max-width: 900px;">
    <h4 class="mb-4">Cadastro de Funcionário</h4>

    <!-- Dados Pessoais -->
    <h5 class="mb-3">Dados Pessoais</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome_funcionario" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Nome Social:</label>
            <input type="text" name="nome_social_funcionario" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">CPF:</label>
            <input type="text" name="cpf_funcionario" class="form-control" maxlength="14" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">RG:</label>
            <input type="text" name="rg_funcionario" class="form-control" maxlength="12" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Data de Nascimento:</label>
        <input type="date" name="data_nasc_funcionario" class="form-control" required>
    </div>

    <!-- Acesso -->
    <h5 class="mt-4 mb-3">Acesso</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">E-mail:</label>
            <input type="email" name="email_funcionario" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha_funcionario" class="form-control" maxlength="15" required>
        </div>
    </div>

    <!-- Contato -->
    <h5 class="mt-4 mb-3">Contato</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Telefone 1:</label>
            <input type="text" name="telefone1_funcionario" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Telefone 2:</label>
            <input type="text" name="telefone2_funcionario" class="form-control">
        </div>
    </div>

    <!-- Endereço -->
    <h5 class="mt-4 mb-3">Endereço</h5>

    <div class="mb-3">
        <label class="form-label">CEP:</label>
        <input type="text" name="cep_funcionario" class="form-control" required>
    </div>

    <div class="row mb-3">
        <div class="col-md-5">
            <label class="form-label">Endereço:</label>
            <input type="text" name="endereco_funcionario" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Número:</label>
            <input type="text" name="numero_funcionario" class="form-control" required>
        </div>
        <div class="col-md-5">
            <label class="form-label">Complemento:</label>
            <input type="text" name="complemento_funcionario" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label">Bairro:</label>
            <input type="text" name="bairro_funcionario" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Cidade:</label>
            <input type="text" name="cidade_funcionario" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Estado:</label>
            <input type="text" name="estado_funcionario" class="form-control" maxlength="2" required>
        </div>
    </div>

    <!-- Dados Profissionais -->
    <h5 class="mt-4 mb-3">Dados Profissionais</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Foto:</label>
            <input type="file" name="foto_funcionario" class="form-control" accept="image/*">
        </div>
        <div class="col-md-6">
            <label class="form-label">Alt. Func:</label>
            <input type="text" name="alt_funcionario" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Cargo:</label>
            <input type="text" name="cargo_funcionario" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Formação Acadêmica:</label>
            <input type="text" name="form_acad_funcionario" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label">Salário:</label>
            <input type="number" name="salario_funcionario" class="form-control" step="0.01" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Data de Início:</label>
            <input type="date" name="data_inicio_funcionario" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Empresa (ID):</label>
            <input type="number" name="id_empresa" class="form-control" required>
        </div>
    </div>

    <!-- Status -->
    <h5 class="mt-4 mb-3">Status</h5>

    <div class="mb-4">
        <select name="status_funcionario" class="form-select" required>
            <option value="" disabled selected>Selecione o status</option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
            <option value="afastado">Afastado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-success w-100">Cadastrar Funcionário</button>
</form>
