<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!-- Hero Carousel Section -->
<section class="hero-carousel">
    <div class="carousel-container">
        <!-- Slide 1 - Vestibular -->
        <div class="carousel-slide active">
            <div class="carousel-overlay"></div>
            <div class="carousel-content">
                <div class="container">
                    <span class="carousel-badge">🎓 Inscrições Abertas</span>
                    <h1 class="carousel-title">Vestibular 2026</h1>
                    <p class="carousel-subtitle">Garanta sua vaga! Inscrições abertas para o 1º semestre.<br>Não perca
                        essa oportunidade de transformar seu futuro.</p>
                    <div class="carousel-buttons">
                        <a href="https://wa.me/5521992830426?text=Olá!%20Gostaria%20de%20informações%20sobre%20o%20meu diploma"
                            target="_blank" class="btn btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> Inscreva-se pelo WhatsApp
                        </a>
                        <a href="<?php echo BASE_URL; ?>cursos" class="btn btn-secondary">Ver Cursos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Bem-vindo -->
        <div class="carousel-slide">
            <div class="carousel-overlay"></div>
            <div class="carousel-content">
                <div class="container">
                    <span class="carousel-badge">✨ Tradição e Excelência</span>
                    <h1 class="carousel-title">Bem-vindo à Faculdade Simonsen</h1>
                    <p class="carousel-subtitle">Transformando conhecimento em oportunidades desde 1960.<br>Mais de 60
                        anos formando profissionais de sucesso.</p>
                    <div class="carousel-buttons">
                        <a href="<?php echo BASE_URL; ?>sobre" class="btn btn-primary">Conheça Nossa História</a>
                        <a href="<?php echo BASE_URL; ?>contato" class="btn btn-secondary">Fale Conosco</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Infraestrutura -->
        <div class="carousel-slide">
            <div class="carousel-overlay"></div>
            <div class="carousel-content">
                <div class="container">
                    <span class="carousel-badge">🏛️ Estrutura Moderna</span>
                    <h1 class="carousel-title">Infraestrutura de Ponta</h1>
                    <p class="carousel-subtitle">Laboratórios equipados, biblioteca completa e salas
                        tecnológicas.<br>Tudo para sua melhor experiência acadêmica.</p>
                    <div class="carousel-buttons">
                        <a href="<?php echo BASE_URL; ?>sobre" class="btn btn-primary">Conheça Nosso Campus</a>
                        <a href="<?php echo BASE_URL; ?>cursos" class="btn btn-secondary">Ver Cursos</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 - Bolsas -->
        <div class="carousel-slide">
            <div class="carousel-overlay"></div>
            <div class="carousel-content">
                <div class="container">
                    <span class="carousel-badge">💰 Oportunidades</span>
                    <h1 class="carousel-title">Bolsas de Estudo</h1>
                    <p class="carousel-subtitle">Descontos de até 50% para novos alunos.<br>Realize seu sonho de cursar
                        o ensino superior!</p>
                    <div class="carousel-buttons">
                        <a href="https://wa.me/5521999999999?text=Olá!%20Gostaria%20de%20informações%20sobre%20Bolsas%20de%20Estudo"
                            target="_blank" class="btn btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> Saiba Mais pelo WhatsApp
                        </a>
                        <a href="<?php echo BASE_URL; ?>cursos" class="btn btn-secondary">Ver Cursos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Controles do Carrossel -->
    <button class="carousel-control prev" onclick="moveSlide(-1)" aria-label="Anterior">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="carousel-control next" onclick="moveSlide(1)" aria-label="Próximo">
        <i class="fas fa-chevron-right"></i>
    </button>

    <!-- Indicadores -->
    <div class="carousel-indicators">
        <span class="indicator active" onclick="goToSlide(0)"></span>
        <span class="indicator" onclick="goToSlide(1)"></span>
        <span class="indicator" onclick="goToSlide(2)"></span>
        <span class="indicator" onclick="goToSlide(3)"></span>
    </div>
</section>

<!-- Sobre Section -->
<section class="about-preview">
    <div class="container">
        <div class="section-grid">
            <div class="about-image">
                <img src="<?php echo BASE_URL; ?>assets/images/campus.jpg" alt="Campus Simonsen">
            </div>
            <div class="about-content">
                <h2 class="section-title">Excelência em Educação Superior</h2>
                <p>A Faculdade Simonsen é uma instituição de ensino superior com mais de 60 anos de tradição,
                    comprometida em formar profissionais qualificados e cidadãos conscientes.</p>
                <p>Nossa missão é proporcionar educação de qualidade, aliando teoria e prática, e preparando nossos
                    alunos para os desafios do mercado de trabalho contemporâneo.</p>
                <a href="<?php echo BASE_URL; ?>sobre" class="btn btn-outline">Saiba Mais</a>
            </div>
        </div>
    </div>
</section>

<!-- Diferenciais -->
<section class="features">
    <div class="container">
        <h2 class="section-title text-center">Por que escolher a Simonsen?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Corpo Docente Qualificado</h3>
                <p>Professores mestres e doutores com vasta experiência acadêmica e profissional.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-building"></i>
                </div>
                <h3>Infraestrutura Moderna</h3>
                <p>Laboratórios equipados, bibliotecas completas e salas de aula tecnológicas.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3>Conexão com o Mercado</h3>
                <p>Parcerias com empresas líderes para estágios e oportunidades de carreira.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Reconhecimento MEC</h3>
                <p>Cursos reconhecidos e avaliados com excelência pelo Ministério da Educação.</p>
            </div>
        </div>
    </div>
</section>

<!-- Cursos Destaque -->
<section class="courses-highlight">
    <div class="container">
        <h2 class="section-title text-center">Cursos em Destaque</h2>
        <div class="courses-grid">
            <div class="course-card">
                <div class="course-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Administração</h3>
                <p>Forme-se em uma das áreas mais versáteis e demandadas do mercado.</p>
                <a href="<?php echo BASE_URL; ?>cursos" class="btn-link">Saiba mais <i
                        class="fas fa-arrow-right"></i></a>
            </div>

            <div class="course-card">
                <div class="course-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Direito</h3>
                <p>Tradição e excelência na formação de profissionais do Direito.</p>
                <a href="<?php echo BASE_URL; ?>cursos" class="btn-link">Saiba mais <i
                        class="fas fa-arrow-right"></i></a>
            </div>

            <div class="course-card">
                <div class="course-icon">
                    <i class="fas fa-cogs"></i>
                </div>
                <h3>Engenharia</h3>
                <p>Formação técnica e prática para os desafios da engenharia moderna.</p>
                <a href="<?php echo BASE_URL; ?>cursos" class="btn-link">Saiba mais <i
                        class="fas fa-arrow-right"></i></a>
            </div>

            <div class="course-card">
                <div class="course-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <h3>Ciências Contábeis</h3>
                <p>Prepare-se para ser um profissional essencial em qualquer organização.</p>
                <a href="<?php echo BASE_URL; ?>cursos" class="btn-link">Saiba mais <i
                        class="fas fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="text-center" style="margin-top: 2rem;">
            <a href="<?php echo BASE_URL; ?>cursos" class="btn btn-primary">Ver Todos os Cursos</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <div class="cta-content">
            <h2>Pronto para começar sua jornada?</h2>
            <p>Junte-se a milhares de alunos que transformaram suas vidas na Faculdade Simonsen</p>
            <a href="<?php echo BASE_URL; ?>contato" class="btn btn-large">Inscreva-se Agora</a>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>