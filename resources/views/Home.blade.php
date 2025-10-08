<?php
session_start();
$currentPage = 'index';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Veterinária - Página Inicial</title>
    <link rel="stylesheet" href="{{url ('css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
        <img src="{{ asset('img/logo.webp') }}" width="200px" height="50px" alt="Logo da Clínica">

            <ul class="nav-links">
                <li><a href="{{url ('home')}}" class="active">Início</a></li>
                <li><a href="{{url ('sobrenos')}}">Sobre Nós</a></li>
                <li><a href="{{url ('servicos')}}">Serviços</a></li>
                <li><a href="{{url ('contato')}}">Contato</a></li>
                <li><a href="{{url ('formulario')}}">Formulário Pet</a></li>
                <li><a href="{{url ('login')}}">Login</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <br>
    <br>

 

    <!-- carrossel Section -->
    <section class="carousel-section">
        <h2>Nossos Diferenciais</h2>
        <div class="carousel" id="home-carousel">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <div class="slide-content">
                        <i class="fas fa-user-md"></i>
                        <h3>Equipe Especializada</h3>
                        <p>Veterinários experientes e dedicados ao bem-estar do seu pet</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content">
                        <i class="fas fa-hospital"></i>
                        <h3>Infraestrutura Moderna</h3>
                        <p>Equipamentos de última geração para diagnósticos precisos</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content">
                        <i class="fas fa-clock"></i>
                        <h3>Atendimento 24h</h3>
                        <p>Emergências atendidas a qualquer hora do dia ou noite</p>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content">
                        <i class="fas fa-heart"></i>
                        <h3>Amor pelos Animais</h3>
                        <p>Tratamos cada pet como se fosse da nossa família</p>
                    </div>
                </div>
            </div>
            <button class="carousel-btn prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="carousel-btn next" onclick="changeSlide(1)">&#10095;</button>
        </div>
        <div class="carousel-dots" id="home-dots">
            <span class="dot active" onclick="goToSlide(1)"></span>
            <span class="dot" onclick="goToSlide(2)"></span>
            <span class="dot" onclick="goToSlide(3)"></span>
            <span class="dot" onclick="goToSlide(4)"></span>
        </div>
    </section>

    <!-- Serviços Preview -->
    <center><h2>Serviços</h2></center>
    <br>
    <br>
        <section class="servicos-preview">
        
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-stethoscope"></i>
                <h3>Consultas</h3>
                <p>Exames clínicos completos e preventivos</p>
            </div>
            <div class="service-card">
                <i class="fas fa-syringe"></i>
                <h3>Vacinação</h3>
                <p>Vacinas essenciais para a saúde do seu pet</p>
            </div>
            <div class="service-card">
                <i class="fas fa-cut"></i>
                <h3>Cirurgias</h3>
                <p>Procedimentos cirúrgicos seguros e eficazes</p>
            </div>
            <div class="service-card">
                <i class="fas fa-pills"></i>
                <h3>Farmácia</h3>
                <p>Medicamentos e produtos veterinários</p>
            </div>
        </div>
    </section>
    <br>
    <br>
    <!-- Rodapé -->
     <b>
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>SanClá Marília</h3>
                <p>Cuidando do seu melhor amigo com amor e dedicação desde 2010.</p>
            </div>
            <div class="footer-section">
                <h3>Contato</h3>
                <p><i class="fas fa-phone"></i> (11) 9999-9999</p>
                <p><i class="fas fa-envelope"></i> contato@sanclamarilia.com</p>
                <p><i class="fas fa-map-marker-alt"></i> Rua das Flores, 123</p>
            </div>
            <div class="footer-section">
                <h3>Horário</h3>
                <p>Segunda a Sexta: 8h às 18h</p>
                <p>Sábado: 8h às 12h</p>
                <p>Emergências: 24h</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> SanClá Marília. Todos os direitos reservados.</p>
        </div>
    </footer>
    </b>

    <script src="{{url ('js/script.js')}}"></script>
</body>
</html>
