<?php

class FuncionariosController extends Controller{

    private $modelFuncionario;

    // construct - automaticamente iniciar algo, construir algo automaticamente.
    public function __construct()
    {
        $this->modelFuncionario = new Funcionario();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/funcionarios/listar';
        $funcionarios = $this->modelFuncionario->getAllFuncionarios();
        $dados['funcionarios'] = $funcionarios;
        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/funcionarios/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar($id)
    {
        $dados = array();

        $dados['conteudo'] = 'admin/funcionarios/editar';
        $funcionario = $this->modelFuncionario->GetFuncionarioByID($id);
        $dados['funcionario'] = $funcionario;
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/funcionarios/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}