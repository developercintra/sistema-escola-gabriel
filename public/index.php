<?php

session_start();

require_once('../config/config.php');

$caminho = new Routes();
$caminho->executar();

// model - Responsável pelos dados e regras de negócio, view - Responsável pela interface do usuário. controller - Responsável pela lógica da aplicação.