// ============================================
// CARROSSEL DA PÁGINA INICIAL
// ============================================

let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-slide');
const indicators = document.querySelectorAll('.indicator');
let autoSlideInterval;

// Função para mover slides
function moveSlide(direction) {
    currentSlide += direction;

    if (currentSlide >= slides.length) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }

    updateCarousel();
    resetAutoSlide();
}

// Função para ir para slide específico
function goToSlide(index) {
    currentSlide = index;
    updateCarousel();
    resetAutoSlide();
}

// Atualizar carrossel
function updateCarousel() {
    slides.forEach((slide, index) => {
        slide.classList.remove('active');
        if (indicators[index]) {
            indicators[index].classList.remove('active');
        }
    });

    if (slides[currentSlide]) {
        slides[currentSlide].classList.add('active');
    }
    if (indicators[currentSlide]) {
        indicators[currentSlide].classList.add('active');
    }
}

// Auto slide
function startAutoSlide() {
    autoSlideInterval = setInterval(() => {
        moveSlide(1);
    }, 10000); // Muda a cada 10 segundos
}

// Resetar auto slide
function resetAutoSlide() {
    clearInterval(autoSlideInterval);
    startAutoSlide();
}

// Iniciar auto slide quando a página carregar
if (slides.length > 0) {
    startAutoSlide();

    // Pausar auto slide ao passar o mouse
    const carouselContainer = document.querySelector('.hero-carousel');
    if (carouselContainer) {
        carouselContainer.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });

        carouselContainer.addEventListener('mouseleave', () => {
            startAutoSlide();
        });
    }
}

// Suporte para gestos touch em dispositivos móveis
let touchStartX = 0;
let touchEndX = 0;

if (slides.length > 0) {
    const carouselContainer = document.querySelector('.carousel-container');

    carouselContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    });

    carouselContainer.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    });

    function handleSwipe() {
        if (touchEndX < touchStartX - 50) {
            moveSlide(1); // Swipe left
        }
        if (touchEndX > touchStartX + 50) {
            moveSlide(-1); // Swipe right
        }
    }
}

// Suporte para navegação por teclado
document.addEventListener('keydown', (e) => {
    if (slides.length > 0) {
        if (e.key === 'ArrowLeft') {
            moveSlide(-1);
        } else if (e.key === 'ArrowRight') {
            moveSlide(1);
        }
    }
});

// ============================================
// MENU TOGGLE
// ============================================

// Menu Toggle
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        menuToggle.classList.toggle('active');
    });
}

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (!menuToggle.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
        menuToggle.classList.remove('active');
    }
});

// Navbar scroll effect
const navbar = document.getElementById('navbar');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
});

// Active nav link
const currentLocation = window.location.pathname;
const navLinks = document.querySelectorAll('.nav-link');

navLinks.forEach(link => {
    const linkPath = new URL(link.href).pathname;
    if (currentLocation === linkPath || (currentLocation.includes(linkPath) && linkPath !== '/')) {
        link.style.color = 'var(--primary-color)';
        link.style.fontWeight = '600';
    }
});

// Course filter functionality
const filterButtons = document.querySelectorAll('.filter-btn');
const courseItems = document.querySelectorAll('.course-item');

if (filterButtons.length > 0) {
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const filter = button.getAttribute('data-filter');

            courseItems.forEach(item => {
                if (filter === 'all') {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    const category = item.getAttribute('data-category');
                    if (category === filter) {
                        item.style.display = 'block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 10);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'scale(0.8)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                }
            });
        });
    });
}

// Contact form handling
const contactForm = document.getElementById('contactForm');

if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();

        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);

        // Here you would normally send the data to a server
        console.log('Form submitted:', data);

        // Show success message
        alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');

        // Reset form
        contactForm.reset();
    });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe elements for animation
document.querySelectorAll('.feature-card, .course-card, .mvv-card, .course-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

// Phone mask (Brazilian format)
const phoneInput = document.getElementById('phone');
if (phoneInput) {
    phoneInput.addEventListener('input', (e) => {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length <= 11) {
            value = value.replace(/^(\d{2})(\d)/g, '($1) $2');
            value = value.replace(/(\d)(\d{4})$/, '$1-$2');
        }
        e.target.value = value;
    });
}

// Add loading state to buttons
document.querySelectorAll('button[type="submit"]').forEach(button => {
    button.addEventListener('click', function () {
        if (this.form && this.form.checkValidity()) {
            this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
            this.disabled = true;

            // Re-enable after 3 seconds (adjust based on your needs)
            setTimeout(() => {
                this.innerHTML = 'Enviar Mensagem';
                this.disabled = false;
            }, 3000);
        }
    });
});

console.log('Faculdade Simonsen - Website carregado com sucesso!');
