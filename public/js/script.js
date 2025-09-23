// Variáveis globais para os carrosséis
let currentSlide = 0;
let currentServiceSlide = 0;
let currentTestimonialSlide = 0;

// Função para inicializar os carrosséis
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar carrossel principal (página inicial)
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    
    if (slides.length > 0) {
        showSlide(currentSlide);
    }
    
    // Inicializar carrossel de serviços (página serviços)
    const serviceSlides = document.querySelectorAll('#services-carousel .carousel-slide');
    const serviceDots = document.querySelectorAll('#services-dots .dot');
    
    if (serviceSlides.length > 0) {
        showServiceSlide(currentServiceSlide);
    }
    
    // Inicializar carrossel de depoimentos (página serviços)
    const testimonialSlides = document.querySelectorAll('#testimonials-carousel .carousel-slide');
    const testimonialDots = document.querySelectorAll('#testimonials-dots .dot');
    
    if (testimonialSlides.length > 0) {
        showTestimonialSlide(currentTestimonialSlide);
    }
    
    // Auto-play para carrosséis
    setInterval(() => {
        if (slides.length > 0) {
            changeSlide(1);
        }
    }, 5000);
    
    setInterval(() => {
        if (serviceSlides.length > 0) {
            changeServiceSlide(1);
        }
    }, 6000);
    
    setInterval(() => {
        if (testimonialSlides.length > 0) {
            changeTestimonialSlide(1);
        }
    }, 7000);
    
    // Menu mobile
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', function() {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }
    
    // Formulário de contato
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            handleContactForm();
        });
    }
});

// Funções para o carrossel principal
function changeSlide(direction) {
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    
    if (slides.length === 0) return;
    
    currentSlide += direction;
    
    if (currentSlide >= slides.length) {
        currentSlide = 0;
    }
    if (currentSlide < 0) {
        currentSlide = slides.length - 1;
    }
    
    showSlide(currentSlide);
}

function goToSlide(n) {
    currentSlide = n - 1;
    changeSlide(1);
}

function showSlide(n) {
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.dot');
    
    if (slides.length === 0) return;
    
    // Esconder todos os slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    
    // Remover classe active de todos os dots
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    
    // Mostrar slide atual
    if (slides[n]) {
        slides[n].classList.add('active');
    }
    
    // Ativar dot correspondente
    if (dots[n]) {
        dots[n].classList.add('active');
    }
}

// Funções para o carrossel de serviços
function changeServiceSlide(direction) {
    const slides = document.querySelectorAll('#services-carousel .carousel-slide');
    const dots = document.querySelectorAll('#services-dots .dot');
    
    if (slides.length === 0) return;
    
    currentServiceSlide += direction;
    
    if (currentServiceSlide >= slides.length) {
        currentServiceSlide = 0;
    }
    if (currentServiceSlide < 0) {
        currentServiceSlide = slides.length - 1;
    }
    
    showServiceSlide(currentServiceSlide);
}

function goToServiceSlide(n) {
    currentServiceSlide = n - 1;
    changeServiceSlide(1);
}

function showServiceSlide(n) {
    const slides = document.querySelectorAll('#services-carousel .carousel-slide');
    const dots = document.querySelectorAll('#services-dots .dot');
    
    if (slides.length === 0) return;
    
    // Esconder todos os slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    
    // Remover classe active de todos os dots
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    
    // Mostrar slide atual
    if (slides[n]) {
        slides[n].classList.add('active');
    }
    
    // Ativar dot correspondente
    if (dots[n]) {
        dots[n].classList.add('active');
    }
}

// Funções para o carrossel de depoimentos
function changeTestimonialSlide(direction) {
    const slides = document.querySelectorAll('#testimonials-carousel .carousel-slide');
    const dots = document.querySelectorAll('#testimonials-dots .dot');
    
    if (slides.length === 0) return;
    
    currentTestimonialSlide += direction;
    
    if (currentTestimonialSlide >= slides.length) {
        currentTestimonialSlide = 0;
    }
    if (currentTestimonialSlide < 0) {
        currentTestimonialSlide = slides.length - 1;
    }
    
    showTestimonialSlide(currentTestimonialSlide);
}

function goToTestimonialSlide(n) {
    currentTestimonialSlide = n - 1;
    changeTestimonialSlide(1);
}

function showTestimonialSlide(n) {
    const slides = document.querySelectorAll('#testimonials-carousel .carousel-slide');
    const dots = document.querySelectorAll('#testimonials-dots .dot');
    
    if (slides.length === 0) return;
    
    // Esconder todos os slides
    slides.forEach(slide => {
        slide.classList.remove('active');
    });
    
    // Remover classe active de todos os dots
    dots.forEach(dot => {
        dot.classList.remove('active');
    });
    
    // Mostrar slide atual
    if (slides[n]) {
        slides[n].classList.add('active');
    }
    
    // Ativar dot correspondente
    if (dots[n]) {
        dots[n].classList.add('active');
    }
}

// Função para lidar com o formulário de contato
function handleContactForm() {
    const form = document.getElementById('contactForm');
    const formData = new FormData(form);
    
    // Simular envio do formulário
    const submitBtn = form.querySelector('.submit-btn');
    const originalText = submitBtn.textContent;
    
    submitBtn.textContent = 'Enviando...';
    submitBtn.disabled = true;
    
    // Simular delay de envio
    setTimeout(() => {
        // Aqui você pode adicionar a lógica real de envio do formulário
        alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
        
        // Resetar formulário
        form.reset();
        
        // Restaurar botão
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }, 2000);
}

// Função para scroll suave
function smoothScroll(target) {
    const element = document.querySelector(target);
    if (element) {
        element.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Função para animações de entrada
function animateOnScroll() {
    const elements = document.querySelectorAll('.service-card, .team-member, .facility-card, .mission-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });
    
    elements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
}

// Inicializar animações quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    animateOnScroll();
});

// Função para validação de formulário
function validateForm() {
    const requiredFields = document.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            field.style.borderColor = '#ff4444';
            isValid = false;
        } else {
            field.style.borderColor = '#ddd';
        }
    });
    
    return isValid;
}

// Função para mostrar/ocultar menu mobile
function toggleMobileMenu() {
    const navLinks = document.querySelector('.nav-links');
    const hamburger = document.querySelector('.hamburger');
    
    if (navLinks && hamburger) {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    }
}

// Adicionar classe active ao link da página atual
function setActiveNavLink() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        const href = link.getAttribute('href');
        if (href === currentPage) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Inicializar quando a página carregar
document.addEventListener('DOMContentLoaded', function() {
    setActiveNavLink();
});

// Função para adicionar efeito de hover nos cards
function addHoverEffects() {
    const cards = document.querySelectorAll('.service-card, .team-member, .facility-card, .mission-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
}

// Inicializar efeitos de hover
document.addEventListener('DOMContentLoaded', function() {
    addHoverEffects();
});

// Função para mostrar loading
function showLoading() {
    const loading = document.createElement('div');
    loading.className = 'loading';
    loading.innerHTML = '<div class="spinner"></div>';
    document.body.appendChild(loading);
}

// Função para esconder loading
function hideLoading() {
    const loading = document.querySelector('.loading');
    if (loading) {
        loading.remove();
    }
}

// Função para mostrar notificação
function showNotification(message, type = 'success') {
    const notification = document.createElement('div');
    notification.className = `notification ${type}`;
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Adicionar estilos CSS dinamicamente para funcionalidades extras
const additionalStyles = `
    .loading {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }
    
    .spinner {
        width: 50px;
        height: 50px;
        border: 5px solid #f3f3f3;
        border-top: 5px solid var(--primary-color);
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }
    
    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
    
    .notification {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 1rem 2rem;
        border-radius: 8px;
        color: white;
        font-weight: bold;
        z-index: 10000;
        animation: slideIn 0.3s ease;
    }
    
    .notification.success {
        background-color: #4CAF50;
    }
    
    .notification.error {
        background-color: #f44336;
    }
    
    @keyframes slideIn {
        from {
            transform: translateX(100%);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
    
    .nav-links.active {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        padding: 1rem;
    }
    
    .hamburger.active span:nth-child(1) {
        transform: rotate(-45deg) translate(-5px, 6px);
    }
    
    .hamburger.active span:nth-child(2) {
        opacity: 0;
    }
    
    .hamburger.active span:nth-child(3) {
        transform: rotate(45deg) translate(-5px, -6px);
    }
`;

// Adicionar estilos ao documento
const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet);