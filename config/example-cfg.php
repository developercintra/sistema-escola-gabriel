<?php

// definindo uma constante, sempre que eu usar urlbase vai ser esse url
define('URL_BASE', 'urldoseuprojeto');



// config database
define('DB_HOST', 'seuhost');
define('DB_NAME', 'nome do seu banco de dados');
define('DB_USER', 'usuario do seu banco de dados');
define('DB_PASS', 'senha do seu banco');

//config email
define('EMAIL_HOST', 'host do email para envio(pode ser hostinger)');
define('EMAIL_PORT', 'porta');
define('EMAIL_USER', 'email de user');
define('EMAIL_PASS', 'senha do email');

// sistema carregamento automatico de class
spl_autoload_register(function($class){
    if(file_exists('../app/controllers/'. $class . '.php')){
        require_once '../app/controllers/'. $class . '.php';
    }

    if(file_exists('../app/models/'. $class . '.php')){
        require_once '../app/models/'. $class . '.php';
    }

    if(file_exists('../routes/'. $class . '.php')){
        require_once '../routes/'. $class . '.php';
    }
});
