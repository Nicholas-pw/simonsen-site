<?php

// Carrega configurações
require_once __DIR__ . '/../config/config.php';

// Carrega o sistema de rotas
$router = require_once __DIR__ . '/../routes/web.php';

// Executa o roteamento
$router->dispatch();
