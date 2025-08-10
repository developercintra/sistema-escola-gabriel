<h1>Criar aluno</h1>

<form action="#" method="POST" enctype="multipart/form-data" class="container p-4 rounded shadow-lg bg-light mt-4" style="max-width: 800px;">
    <h4 class="mb-4">Cadastro de Aluno</h4>

    <!-- Dados Pessoais -->
    <h5 class="mb-3">Dados Pessoais</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nome:</label>
            <input type="text" name="nome_aluno" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Nome Social:</label>
            <input type="text" name="nome_social_aluno" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">CPF:</label>
            <input type="text" name="cpf_aluno" class="form-control" maxlength="14" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">RG:</label>
            <input type="text" name="rg_aluno" class="form-control" maxlength="12" required>
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">Data de Nascimento:</label>
        <input type="date" name="data_nasc_aluno" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Foto do aluno:</label>
        <input type="file" name="foto_aluno" class="form-control" accept="image/*">
    </div>
    
    <div class="mb-3">
            <label class="form-label">Alt. Aluno:</label>
            <input type="text" name="alt_aluno" class="form-control">
        </div>

    <!-- Dados de Acesso -->
    <h5 class="mt-4 mb-3">Dados de Acesso</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">E-mail:</label>
            <input type="email" name="email_aluno" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Senha:</label>
            <input type="password" name="senha_aluno" class="form-control" maxlength="15" required>
        </div>
    </div>

    <!-- Contato -->
    <h5 class="mt-4 mb-3">Contato</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Telefone 1:</label>
            <input type="text" name="telefone1_aluno" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Telefone 2:</label>
            <input type="text" name="telefone2_aluno" class="form-control">
        </div>
    </div>

    <!-- Endereço -->
    <h5 class="mt-4 mb-3">Endereço</h5>

    <div class="mb-3">
        <label class="form-label">CEP:</label>
        <input type="text" name="cep_aluno" class="form-control" required>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Endereço:</label>
            <input type="text" name="endereco_aluno" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Número:</label>
            <input type="text" name="numero_aluno" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Complemento:</label>
            <input type="text" name="complemento_aluno" class="form-control">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <label class="form-label">Bairro:</label>
            <input type="text" name="bairro_aluno" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Cidade:</label>
            <input type="text" name="cidade_aluno" class="form-control" required>
        </div>
        <div class="col-md-2">
            <label class="form-label">Estado (UF):</label>
            <input type="text" name="estado_aluno" class="form-control" maxlength="2" required>
        </div>
    </div>

    <!-- Responsável -->
    <h5 class="mt-4 mb-3">Responsável</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Nome do responsável:</label>
            <input type="text" name="nome_responsavel" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Telefone do responsável:</label>
            <input type="text" name="telefone_responsavel" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Email do responsável:</label>
            <input type="text" name="email_responsavel" class="form-control">
        </div>
    </div>

    <!-- Status -->
    <h5 class="mt-4 mb-3">Status do Aluno</h5>
    <div class="mb-3">
        <select name="status_aluno" class="form-select" required>
            <option value="" disabled selected>Selecione o status</option>
            <option value="ativo">Ativo</option>
            <option value="inativo">Inativo</option>
            <option value="trancado">Trancado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary w-100 mt-3">Cadastrar Aluno</button>
</form>
