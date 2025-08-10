<?php

class PartProjetosController extends Controller{
    private $modelPartProjeto;

    public function __construct()
    {
        $this->modelPartProjeto = new PartProjeto();
    }

    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/partProjetos/listar';
        $partProjetos = $this->modelPartProjeto->getParticipacoes();
        $dados['partProjetos'] = $partProjetos;

        $this->carregarViews('admin/dash', $dados);
    }
    public function criar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/partProjetos/criar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function editar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/partProjetos/editar';
        $this->carregarViews('admin/dash', $dados);
    }

    public function desativar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/partProjetos/desativar';
        $this->carregarViews('admin/dash', $dados);
    }
}