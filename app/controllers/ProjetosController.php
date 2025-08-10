<?php

class ProjetosController extends Controller
{
    private $modelProjeto;

    public function __construct()
    {
        $this->modelProjeto = new Projeto();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/projetos/listar';
        $projetos = $this->modelProjeto->getProjetos();
        $dados['projetos'] = $projetos;
        $this->carregarViews('admin/dash', $dados);
    }
    
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/projetos/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/projetos/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/projetos/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}
