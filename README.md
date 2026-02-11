# Faculdade Simonsen - Website Institucional

Website institucional completo da Faculdade Simonsen, desenvolvido em PHP com arquitetura MVC.

## 🚀 Características

- ✅ Arquitetura MVC (Model-View-Controller)
- ✅ Sistema de rotas personalizado
- ✅ Design responsivo e moderno
- ✅ Estrutura profissional de pastas
- ✅ SEO otimizado
- ✅ Preparado para expansão futura

## 📁 Estrutura do Projeto

```
simonsen-site/
├── app/
│   ├── controllers/          # Controladores da aplicação
│   │   ├── Controller.php    # Controller base
│   │   ├── HomeController.php
│   │   ├── AboutController.php
│   │   ├── CoursesController.php
│   │   └── ContactController.php
│   ├── models/               # Models (para uso futuro)
│   └── views/                # Views da aplicação
│       ├── layouts/          # Layouts (header, footer)
│       ├── pages/            # Páginas do site
│       └── components/       # Componentes reutilizáveis
├── config/
│   └── config.php            # Configurações do sistema
├── public/                   # Pasta pública (document root)
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css     # CSS principal
│   │   ├── js/
│   │   │   └── script.js     # JavaScript principal
│   │   └── images/           # Imagens do site
│   ├── uploads/              # Upload de arquivos
│   └── index.php             # Ponto de entrada
├── routes/
│   ├── Router.php            # Sistema de rotas
│   └── web.php               # Definição de rotas
└── .htaccess                 # Configuração Apache
```

## 🔧 Instalação

### Requisitos
- PHP 7.4 ou superior
- Apache com mod_rewrite habilitado
- MySQL (para uso futuro)

### Passo a Passo

1. **Clone ou copie o projeto para seu servidor local**
   ```bash
   # Copie a pasta simonsen-site para:
   # Windows: C:/xampp/htdocs/
   # Linux: /var/www/html/
   # Mac: /Applications/XAMPP/htdocs/
   ```

2. **Configure o arquivo de hosts (opcional)**
   - Para usar domínio local como `simonsen.local`
   - Edite: `C:\Windows\System32\drivers\etc\hosts` (Windows) ou `/etc/hosts` (Linux/Mac)
   - Adicione: `127.0.0.1 simonsen.local`

3. **Configure o VirtualHost no Apache (opcional)**
   ```apache
   <VirtualHost *:80>
       ServerName simonsen.local
       DocumentRoot "C:/xampp/htdocs/simonsen-site/public"
       <Directory "C:/xampp/htdocs/simonsen-site/public">
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

4. **Ajuste a BASE_URL**
   - Edite o arquivo `config/config.php`
   - Altere a constante `BASE_URL` conforme necessário:
   ```php
   // Para localhost direto
   define('BASE_URL', 'http://localhost/simonsen-site/public/');
   
   // Para VirtualHost
   define('BASE_URL', 'http://simonsen.local/');
   ```

5. **Acesse o site**
   - Localhost: `http://localhost/simonsen-site/public/`
   - VirtualHost: `http://simonsen.local/`

## 📄 Páginas Disponíveis

- **Home** - `/` - Página inicial
- **Sobre** - `/sobre` - Informações sobre a faculdade
- **Cursos** - `/cursos` - Lista de cursos disponíveis
- **Contato** - `/contato` - Formulário de contato

## 🎨 Personalização

### Cores
Edite as variáveis CSS em `public/assets/css/style.css`:
```css
:root {
    --primary-color: #1e3a8a;    /* Azul principal */
    --secondary-color: #3b82f6;  /* Azul secundário */
    --accent-color: #fbbf24;     /* Amarelo/dourado */
    --dark-color: #1f2937;       /* Cinza escuro */
}
```

### Logo
- Substitua os arquivos em `public/assets/images/`:
  - `logo.png` - Logo principal (200x60px recomendado)
  - `logo.svg` - Versão vetorial da logo

### Imagens
- Adicione suas imagens em `public/assets/images/`
- Substitua as imagens placeholder:
  - `campus.jpg`
  - `historia.jpg`

## 🔌 Adicionando Novas Rotas

1. **Crie o Controller**
   ```php
   // app/controllers/NovoController.php
   <?php
   require_once __DIR__ . '/Controller.php';
   
   class NovoController extends Controller {
       public function index() {
           $data = ['pageTitle' => 'Nova Página'];
           $this->view('pages/nova', $data);
       }
   }
   ```

2. **Crie a View**
   ```php
   // app/views/pages/nova.php
   <?php require_once __DIR__ . '/../layouts/header.php'; ?>
   
   <section class="page-header">
       <div class="container">
           <h1>Nova Página</h1>
       </div>
   </section>
   
   <?php require_once __DIR__ . '/../layouts/footer.php'; ?>
   ```

3. **Adicione a Rota**
   ```php
   // routes/web.php
   $router->get('/nova-pagina', 'NovoController', 'index');
   ```

## 📱 Responsividade

O site é totalmente responsivo e se adapta a:
- 📱 Mobile (até 576px)
- 📱 Tablet (577px - 968px)
- 💻 Desktop (969px+)

## 🔒 Segurança

Para produção, lembre-se de:
- [ ] Alterar `ENVIRONMENT` para 'production' em `config/config.php`
- [ ] Desabilitar `DEBUG_MODE`
- [ ] Configurar banco de dados seguro
- [ ] Implementar validação de formulários no servidor
- [ ] Adicionar proteção CSRF
- [ ] Implementar sistema de sanitização de inputs

## 🚀 Próximos Passos

- [ ] Implementar banco de dados
- [ ] Criar sistema de login administrativo
- [ ] Adicionar painel de administração
- [ ] Implementar envio real de formulários
- [ ] Adicionar sistema de newsletter
- [ ] Integrar com APIs de pagamento
- [ ] Implementar sistema de matrícula online

## 📞 Suporte

Para dúvidas ou sugestões sobre o desenvolvimento:
- Documentação PHP: https://www.php.net/
- Apache .htaccess: https://httpd.apache.org/docs/current/howto/htaccess.html

## 📝 Licença

Este projeto foi desenvolvido para a Faculdade Simonsen.

---

**Desenvolvido com ❤️ para a Faculdade Simonsen**
