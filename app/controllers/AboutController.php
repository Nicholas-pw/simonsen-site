<?php

require_once __DIR__ . '/Controller.php';

class AboutController extends Controller {
    
    public function index() {
        $data = [
            'pageTitle' => 'Sobre Nós - Faculdade Simonsen',
            'metaDescription' => 'Conheça a história e missão da Faculdade Simonsen'
        ];
        
        $this->view('pages/about', $data);
    }
}
