<?php require_once __DIR__ . '/../layouts/header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1>Entre em Contato</h1>
        <p>Estamos prontos para atender você</p>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <!-- Formulário -->
            <div class="contact-form-wrapper">
                <h2>Envie sua Mensagem</h2>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Nome Completo *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telefone *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Assunto *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Selecione um assunto</option>
                            <option value="informacoes">Informações sobre Cursos</option>
                            <option value="inscricao">Processo de Inscrição</option>
                            <option value="financeiro">Questões Financeiras</option>
                            <option value="outros">Outros Assuntos</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Mensagem *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Enviar Mensagem</button>
                </form>
            </div>
            
            <!-- Informações de Contato -->
            <div class="contact-info-wrapper">
                <h2>Informações de Contato</h2>
                
                <div class="info-cards">
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="info-content">
                            <h3>Endereço</h3>
                            <p>Av. Exemplo, 1000<br>Centro - Rio de Janeiro/RJ<br>CEP: 20000-000</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-content">
                            <h3>Telefone</h3>
                            <p>(21) 3333-4444<br>(21) 98888-7777</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h3>E-mail</h3>
                            <p>contato@simonsen.edu.br<br>secretaria@simonsen.edu.br</p>
                        </div>
                    </div>
                    
                    <div class="info-card">
                        <div class="info-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="info-content">
                            <h3>Horário de Atendimento</h3>
                            <p>Segunda a Sexta: 8h às 22h<br>Sábado: 8h às 13h</p>
                        </div>
                    </div>
                </div>
                
                <div class="social-media">
                    <h3>Redes Sociais</h3>
                    <div class="social-links-large">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="map-section">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.2962255432647!2d-43.17840668540699!3d-22.90278994395904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5f3a4a5555%3A0x5555555555555555!2sRio%20de%20Janeiro%2C%20RJ!5e0!3m2!1spt-BR!2sbr!4v1234567890123!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
