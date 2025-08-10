<?php

class Routes {
    // Iniciar as rotas
    public function executar() {

        // Captura a URL
        $url = '/';
        if(isset($_GET['url'])){
            $url .= $_GET['url'];
        }

        $parametro = array();

        // Verifica se a URL não está vazia e não é apenas uma "/"
        if (!empty($url) && $url != '/') {

            $url = explode('/', $url);
            array_shift($url);
            $controladorAtual = ucfirst($url[0]) . 'Controller';

            array_shift($url);
            if (isset($url[0]) && !empty($url[0])) {
                $acaoAtual = ucfirst($url[0]);
                array_shift($url);
            } else {
                $acaoAtual = 'index';
            }

            if (count($url) > 0) {
                $parametro = $url;
            }

        } else {
            $controladorAtual = 'HomeController';
            $acaoAtual = 'index';
        }
        if (!file_exists('../app/controllers/' . $controladorAtual . '.php')) {
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';
        }
        require_once '../app/controllers/' . $controladorAtual . '.php';
        if (!class_exists($controladorAtual) || !method_exists($controladorAtual, $acaoAtual)) {
            $controladorAtual = 'ErroController';
            $acaoAtual = 'index';
        }
        $controller = new $controladorAtual();

        // Chama a função dentro do controlador, passando os parâmetros
        call_user_func_array(array($controller, $acaoAtual), $parametro);
    }
}
