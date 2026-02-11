<?php

require_once __DIR__ . '/Controller.php';

class CoursesController extends Controller {
    
    public function index() {
        $data = [
            'pageTitle' => 'Cursos - Faculdade Simonsen',
            'metaDescription' => 'Conheça os cursos oferecidos pela Faculdade Simonsen'
        ];
        
        $this->view('pages/courses', $data);
    }
}
