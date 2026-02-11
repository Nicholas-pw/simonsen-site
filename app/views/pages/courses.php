<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Nossos Cursos</h1>
        <p>Descubra o curso ideal para sua carreira profissional</p>
    </div>
</section>

<!-- Filtros de Curso -->
<section class="courses-section">
    <div class="container">
        <div class="courses-filter">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="graduacao">Graduação</button>
            <button class="filter-btn" data-filter="pos">Pós-Graduação</button>
            <button class="filter-btn" data-filter="ead">EAD</button>
        </div>
        
        <div class="courses-list">
            <!-- Curso 1 -->
            <div class="course-item" data-category="graduacao">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h3>Administração</h3>
                        <span class="course-badge">Graduação</span>
                    </div>
                </div>
                <p class="course-description">Forme-se para liderar organizações e gerenciar recursos com eficiência. Aprenda sobre gestão empresarial, finanças, marketing e recursos humanos.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 4 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Noturno</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 2 -->
            <div class="course-item" data-category="graduacao">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <div>
                        <h3>Direito</h3>
                        <span class="course-badge">Graduação</span>
                    </div>
                </div>
                <p class="course-description">Torne-se um profissional capacitado para atuar em todas as áreas do Direito. Formação sólida em teoria e prática jurídica.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 5 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Matutino/Noturno</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 3 -->
            <div class="course-item" data-category="graduacao">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div>
                        <h3>Engenharia Civil</h3>
                        <span class="course-badge">Graduação</span>
                    </div>
                </div>
                <p class="course-description">Prepare-se para projetar, construir e gerenciar obras de infraestrutura. Formação técnica completa com aulas práticas em laboratórios.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 5 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Integral</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 4 -->
            <div class="course-item" data-category="graduacao">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div>
                        <h3>Ciências Contábeis</h3>
                        <span class="course-badge">Graduação</span>
                    </div>
                </div>
                <p class="course-description">Forme-se para gerenciar as finanças de empresas e assessorar nas decisões econômicas. Ampla empregabilidade no mercado.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 4 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Noturno</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 5 -->
            <div class="course-item" data-category="graduacao">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div>
                        <h3>Ciência da Computação</h3>
                        <span class="course-badge">Graduação</span>
                    </div>
                </div>
                <p class="course-description">Desenvolva soluções tecnológicas inovadoras. Aprenda programação, desenvolvimento de sistemas e inteligência artificial.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 4 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Noturno</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 6 -->
            <div class="course-item" data-category="pos">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div>
                        <h3>MBA em Gestão Empresarial</h3>
                        <span class="course-badge badge-pos">Pós-Graduação</span>
                    </div>
                </div>
                <p class="course-description">Especialize-se em gestão estratégica de negócios. Desenvolva competências para liderança e tomada de decisões executivas.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 18 meses</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Período: Noturno/Sábados</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 7 -->
            <div class="course-item" data-category="ead">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <div>
                        <h3>Marketing Digital</h3>
                        <span class="course-badge badge-ead">EAD</span>
                    </div>
                </div>
                <p class="course-description">Domine as estratégias de marketing no ambiente digital. Aprenda SEO, mídias sociais, analytics e gestão de campanhas online.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 2 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Modalidade: Online</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
            
            <!-- Curso 8 -->
            <div class="course-item" data-category="ead">
                <div class="course-header">
                    <div class="course-icon-large">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div>
                        <h3>Pedagogia</h3>
                        <span class="course-badge badge-ead">EAD</span>
                    </div>
                </div>
                <p class="course-description">Forme-se para atuar na educação infantil e anos iniciais. Prepare-se para ser um educador transformador.</p>
                <div class="course-info">
                    <div class="info-item">
                        <i class="fas fa-clock"></i>
                        <span>Duração: 4 anos</span>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-calendar"></i>
                        <span>Modalidade: Online</span>
                    </div>
                </div>
                <a href="#" class="btn btn-outline">Mais Informações</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Ainda com dúvidas sobre qual curso escolher?</h2>
            <p>Nossa equipe está pronta para ajudar você a encontrar o curso ideal</p>
            <a href="<?php echo BASE_URL; ?>contato" class="btn btn-large">Fale com um Consultor</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
