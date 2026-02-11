# 🚀 GUIA RÁPIDO DE INSTALAÇÃO - Faculdade Simonsen

## ⚡ Instalação Rápida (3 passos)

### 1️⃣ Copie o projeto
```
Copie a pasta 'simonsen-site' para:
- XAMPP (Windows): C:\xampp\htdocs\
- WAMP (Windows): C:\wamp64\www\
- LAMP (Linux): /var/www/html/
- MAMP (Mac): /Applications/MAMP/htdocs/
```

### 2️⃣ Configure a URL Base
Edite o arquivo: `config/config.php`

Altere a linha:
```php
define('BASE_URL', 'http://localhost/simonsen-site/public/');
```

### 3️⃣ Acesse o site
Abra no navegador:
```
http://localhost/simonsen-site/public/
```

## ✅ PRONTO! O site já está funcionando!

---

## 📋 Requisitos Mínimos
- ✅ PHP 7.4+
- ✅ Apache com mod_rewrite
- ✅ Navegador moderno

---

## 🎯 Páginas Disponíveis

- **Home**: http://localhost/simonsen-site/public/
- **Sobre**: http://localhost/simonsen-site/public/sobre
- **Cursos**: http://localhost/simonsen-site/public/cursos
- **Contato**: http://localhost/simonsen-site/public/contato

---

## 🎨 Personalize seu site

### Alterar Cores
Arquivo: `public/assets/css/style.css`

Procure por `:root` e altere:
```css
--primary-color: #1e3a8a;     /* Azul principal */
--secondary-color: #3b82f6;   /* Azul claro */
--accent-color: #fbbf24;      /* Amarelo/Dourado */
```

### Alterar Logo
Substitua os arquivos em: `public/assets/images/`
- `logo.png` (recomendado: 200x60px)
- `logo.svg`

### Alterar Imagens
Substitua em: `public/assets/images/`
- `campus.jpg`
- `historia.jpg`

---

## 🆘 Solução de Problemas

### Erro 404 - Página não encontrada
1. Verifique se o mod_rewrite está ativo no Apache
2. Confira se os arquivos `.htaccess` existem
3. Verifique a BASE_URL em `config/config.php`

### Site sem estilo (CSS não carrega)
1. Verifique a BASE_URL em `config/config.php`
2. Confirme que os arquivos CSS existem em `public/assets/css/`
3. Limpe o cache do navegador (Ctrl+F5)

### Links não funcionam
- Verifique a configuração da BASE_URL
- Certifique-se de que o Apache tem permissão na pasta

---

## 📞 Informações de Contato no Site

Para personalizar os dados de contato, edite:
- `app/views/layouts/footer.php` (rodapé)
- `app/views/pages/contact.php` (página de contato)

---

## 🔐 Para Produção

Antes de colocar em produção:
1. Altere ENVIRONMENT para 'production' em `config/config.php`
2. Desabilite DEBUG_MODE
3. Configure SSL/HTTPS
4. Implemente banco de dados
5. Adicione validação de formulários

---

## 📚 Documentação Completa

Consulte o arquivo `README.md` para:
- Estrutura completa do projeto
- Como adicionar novas páginas
- Configuração avançada
- Integração com banco de dados

---

**Desenvolvido para Faculdade Simonsen** ❤️
