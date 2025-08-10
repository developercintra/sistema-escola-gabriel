<?php

class HomeController extends Controller{
    public function index(){
        $dados = array();
        $dados['titulo'] = 'Site Escola';
        $dados['subtitulo'] = 'Home';	


        $modelCurso = new Curso();
        $dados['cursos'] = $modelCurso->getCursoRand();
        
        $this->carregarViews('home', $dados);
    }   
}