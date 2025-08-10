<?php

class InstrutoresController extends Controller{
    public function index(){
        $dados = array();

        $this->carregarViews('instrutores', $dados);
    }
}