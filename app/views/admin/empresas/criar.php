<h1 class="text-center mt-5">Criar Empresa</h1>

<div class="container-fluid px-5 mt-4">
    <form action="<?= URL_BASE ?>empresas/criar" method="POST" class="p-5 rounded-4 shadow bg-white needs-validation">

        <div class="row g-4">
            <div class="col-md-6">
                <label class="form-label">Nome da empresa:</label>
                <input type="text" name="nome_empresa" class="form-control form-control-lg" required placeholder="Digite o nome da empresa">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nome fantasia:</label>
                <input type="text" name="fantasia_empresa" class="form-control form-control-lg" required placeholder="Digite o nome fantasia">
            </div>

            <div class="col-md-4">
                <label class="form-label">Tipo de empresa:</label>
                <input type="text" name="tipo_empresa" class="form-control form-control-lg" required placeholder="Ex: LTDA, MEI, EIRELI">
            </div>
            <div class="col-md-4">
                <label class="form-label">CNPJ:</label>
                <input type="text" name="cnpj_empresa" class="form-control form-control-lg" required placeholder="00.000.000/0000-00">
            </div>
            <div class="col-md-4">
                <label class="form-label">Inscrição Estadual:</label>
                <input type="text" name="inscr_est_empresa" class="form-control form-control-lg" placeholder="Inscrição Estadual">
            </div>

            <div class="col-md-6">
                <label class="form-label">Email:</label>
                <input type="email" name="email_empresa" class="form-control form-control-lg" required placeholder="exemplo@empresa.com">
            </div>
            <div class="col-md-6">
                <label class="form-label">Telefone:</label>
                <input type="text" name="telefone1_empresa" class="form-control form-control-lg" required placeholder="(00) 00000-0000">
            </div>

            <div class="col-md-3">
                <label class="form-label">CEP:</label>
                <input type="text" name="cep_empresa" class="form-control form-control-lg" required placeholder="00000-000">
            </div>
            <div class="col-md-6">
                <label class="form-label">Endereço:</label>
                <input type="text" name="endereco_empresa" class="form-control form-control-lg" required placeholder="Rua, Avenida, etc.">
            </div>
            <div class="col-md-3">
                <label class="form-label">Número:</label>
                <input type="text" name="numero_empresa" class="form-control form-control-lg" required placeholder="Nº">
            </div>

            <div class="col-md-4">
                <label class="form-label">Complemento:</label>
                <input type="text" name="complemento_empresa" class="form-control form-control-lg" placeholder="Opcional">
            </div>
            <div class="col-md-4">
                <label class="form-label">Bairro:</label>
                <input type="text" name="bairro_empresa" class="form-control form-control-lg" required placeholder="Digite o bairro">
            </div>
            <div class="col-md-3">
                <label class="form-label">Cidade:</label>
                <input type="text" name="cidade_empresa" class="form-control form-control-lg" required placeholder="Digite a cidade">
            </div>
            <div class="col-md-1">
                <label class="form-label">UF:</label>
                <input type="text" name="estado_empresa" class="form-control form-control-lg text-uppercase" maxlength="2" required placeholder="UF">
            </div>
        </div>

        <div class="mt-5">
            <button type="submit" class="btn btn-success btn-lg w-100 fw-semibold">
                <i class="bi bi-check-circle-fill me-2"></i>Cadastrar Empresa
            </button>
        </div>
    </form>
</div>
