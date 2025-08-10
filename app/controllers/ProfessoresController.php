<?php

class ProfessoresController extends Controller{
    public function listar()
    {
        $dados = array();

        $dados['conteudo'] = 'admin/professores/listar';

        $this->carregarViews('admin/dash', $dados);
    }
}