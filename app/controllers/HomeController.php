<?php

require_once __DIR__ . '/Controller.php';

class HomeController extends Controller
{

    public function index()
    {
        $data = [
            'pageTitle' => 'Home - Faculdade Simonsen',
            'metaDescription' => 'Bem-vindo à Faculdade Simonsen - Excelência em Educação Superior'
        ];

        $this->view('pages/home', $data);
    }
}
