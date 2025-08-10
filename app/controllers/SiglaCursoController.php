<?php

class SiglaCursoController extends Controller{
    private $modelSiglaCurso;

    public function __construct()
    {
        $this->modelSiglaCurso = new SiglaCurso();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/siglaCurso/listar';
        $siglaCurso = $this->modelSiglaCurso->getSiglaCursos();
        $dados['siglaCurso'] = $siglaCurso;

        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/siglaCurso/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/siglaCurso/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/siglaCurso/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}