<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?php echo $metaDescription ?? 'Faculdade Simonsen - Excelência em Educação Superior'; ?>">
    <title><?php echo $pageTitle ?? 'Faculdade Simonsen'; ?></title>
    <link rel="icon" href="assets/images/logoweb.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?php echo BASE_URL; ?>" class="logo">
                    <img src="<?php echo BASE_URL; ?>assets/images/logo.png" alt="Faculdade Simonsen" class="logo-img">
                </a>

                <div class="menu-toggle" id="menuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo BASE_URL; ?>" class="nav-link">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>sobre" class="nav-link">Sobre</a></li>
                    <li><a href="<?php echo BASE_URL; ?>cursos" class="nav-link">Cursos</a></li>
                    <li><a href="<?php echo BASE_URL; ?>contato" class="nav-link">Contato</a></li>
                    <li><a href="#" class="nav-link btn-portal">Portal do Aluno</a></li>
                </ul>
            </div>
        </div>
    </nav>