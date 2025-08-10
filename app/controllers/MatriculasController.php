<?php

class MatriculasController extends Controller{
    private $modelMatricula;

    // construct - automaticamente iniciar algo, construir algo automaticamente.
    public function __construct()
    {
        $this->modelMatricula = new Matricula();
    }
    
    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/matriculas/listar';

        $matricula = $this->modelMatricula->getMatriculas();
        $dados['matricula'] = $matricula;

        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/matriculas/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/matriculas/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/matriculas/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}