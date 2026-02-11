<?php

require_once __DIR__ . '/Controller.php';

class ContactController extends Controller {
    
    public function index() {
        $data = [
            'pageTitle' => 'Contato - Faculdade Simonsen',
            'metaDescription' => 'Entre em contato com a Faculdade Simonsen'
        ];
        
        $this->view('pages/contact', $data);
    }
}
