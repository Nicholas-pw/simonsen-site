<?php

require_once __DIR__ . '/Router.php';

$router = new Router();

$router->get('/', 'HomeController', 'index');
$router->get('/sobre', 'AboutController', 'index');
$router->get('/cursos', 'CoursesController', 'index');
$router->get('/contato', 'ContactController', 'index');

return $router;
