<?php

class UnidadeController extends Controller{
    public function index(){
        $dados = array();

        $this->carregarViews('unidade', $dados);
    }
}