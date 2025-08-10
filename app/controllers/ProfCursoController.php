<?php

class ProfCursoController extends Controller{
    private $modelProfCurso;

    public function __construct()
    {
        $this->modelProfCurso = new ProfCurso();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/profCurso/listar';
        $profCurso = $this->modelProfCurso->getProfCurso();
        $dados['profCurso'] = $profCurso;

        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/profCurso/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/profCurso/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/profCurso/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}