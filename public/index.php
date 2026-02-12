<?php

// Carrega configurações
require_once __DIR__ . '/../config/config.php';

// Carrega as rotas (Router vem de dentro do web.php)
$router = require_once __DIR__ . '/../routes/web.php';

// Executa o roteamento
$router->dispatch();
