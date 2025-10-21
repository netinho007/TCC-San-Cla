<?php
session_start();
$currentPage = 'sobrenos';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Clínica Veterinária</title>
    <link rel="stylesheet" href="{{url ('css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <img src="{{ asset('img/logo.webp') }}" width="200px" height="50px" alt="Logo da Clínica">
            <ul class="nav-links">
                <li><a href="{{url ('/')}}">Início</a></li>
                <li><a href="{{url ('sobrenos')}}" class="active">Sobre Nós</a></li>
                <li><a href="{{url ('servicos')}}">Serviços</a></li>
                <li><a href="{{url ('contato')}}">Contato</a></li>
                <li><a href="{{url ('formulario')}}">Formulário Pet</a></li>
                <li><a href="{{url ('login')}}">Login</a></li>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>
    <br>
    <br>

   

    
    <!-- Our Story -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Nossa História</h2>
                    <p>A SanClá Marília é um centro veterinário com atendimento clínico, cirúrgico, internação e pronto atendimento. Temos como lema o trabalho em conjunto, garantindo o melhor tratamento ao animal, onde a união faz toda a diferença!</p>
                    <p>Localizada na cidade de Marília, a SanClá Saúde Animal tem como principal objetivo atender seus clientes em todas as áreas clínicas e necessidades de seus pets. A experiência e a qualificação de nossos profissionais, somadas a uma infraestrutura de alto padrão, garantem os melhores cuidados aos pequenos animais.</p>
                </div>
                <img src="{{ asset('img/fotodoespaco.webp') }}" alt="Foto do espaço da clínica" width="600px" height="400px">
            </div>
        </div>
    </section>

    <!-- Mission and Values -->
    <section class="mission-section">
        <div class="container">
            <div class="mission-grid">
                <div class="mission-card">
                    <i class="fas fa-bullseye"></i>
                    <h3>Nossa Missão</h3>
                    <p>Proporcionar cuidados veterinários de excelência, promovendo a saúde e bem-estar dos pets, sempre com amor, respeito e dedicação.</p>
                </div>
                <div class="mission-card">
                    <i class="fas fa-eye"></i>
                    <h3>Nossa Visão</h3>
                    <p>Ser reconhecida como a clínica veterinária de referência, oferecendo serviços de qualidade e inovação em medicina veterinária.</p>
                </div>
                <div class="mission-card">
                    <i class="fas fa-star"></i>
                    <h3>Nossos Valores</h3>
                    <p>Amor pelos animais, ética profissional, excelência técnica, inovação constante e compromisso com o bem-estar animal.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Nossa Equipe</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Dra. Ana Silva</h3>
                    <p class="member-title">Médica Veterinária - Diretora</p>
                    <p>Especialista em clínica médica de cães e gatos, com mais de 15 anos de experiência.</p>
                </div>
                <div class="team-member">
                    <div class="member-photo">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Dr. Carlos Santos</h3>
                    <p class="member-title">Médico Veterinário</p>
                    <p>Especialista em cirurgia veterinária e emergências, com vasta experiência em procedimentos complexos.</p>
                </div>
                <div class="team-member">
                    <div class="member-photo">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h3>Dra. Mariana Costa</h3>
                    <p class="member-title">Médica Veterinária</p>
                    <p>Especialista em felinos e animais exóticos, com foco em medicina preventiva.</p>
                </div>
                <div class="team-member">
                    <div class="member-photo">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <h3>Maria Oliveira</h3>
                    <p class="member-title">Técnica Veterinária</p>
                    <p>Responsável pelos cuidados diários e assistência em procedimentos veterinários.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="facilities-section">
        <div class="container">
            <h2>Nossa Estrutura</h2>
            <div class="facilities-grid">
                <div class="facility-card">
                    <i class="fas fa-hospital"></i>
                    <h3>Consultórios Modernos</h3>
                    <p>Ambientes climatizados e equipados para o conforto do seu pet</p>
                </div>
                <div class="facility-card">
                    <i class="fas fa-microscope"></i>
                    <h3>Laboratório Próprio</h3>
                    <p>Exames laboratoriais com resultados rápidos e precisos</p>
                </div>
                <div class="facility-card">
                    <i class="fas fa-camera"></i>
                    <h3>Exames de Imagem</h3>
                    <p>Radiografia digital e ultrassom para diagnósticos precisos</p>
                </div>
                <div class="facility-card">
                    <i class="fas fa-bed"></i>
                    <h3>Internação</h3>
                    <p>Alojamento confortável para pets que precisam de observação</p>
                </div>
                <div class="facility-card">
                    <i class="fas fa-cut"></i>
                    <h3>Centro Cirúrgico</h3>
                    <p>Salas cirúrgicas equipadas com tecnologia de ponta</p>
                </div>
                <div class="facility-card">
                    <i class="fas fa-parking"></i>
                    <h3>Estacionamento</h3>
                    <p>Estacionamento gratuito para sua comodidade</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Numbers -->
    <section class="numbers-section">
        <div class="container">
            <h2>Números que Orgulham</h2>
            <div class="numbers-grid">
                <div class="number-card">
                    <h3>5000+</h3>
                    <p>Pets Atendidos</p>
                </div>
                <div class="number-card">
                    <h3>15</h3>
                    <p>Anos de Experiência</p>
                </div>
                <div class="number-card">
                    <h3>24h</h3>
                    <p>Atendimento de Emergência</p>
                </div>
                <div class="number-card">
                    <h3>100%</h3>
                    <p>Compromisso com a Qualidade</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
     <b>
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>SanClá Marília</h3>
                <p>Cuidando do seu melhor amigo com amor e dedicação desde 2010.</p>
            </div>
            <div class="footer-section">
                <h3>Contato</h3>
                <p><i class="fas fa-phone"></i> (14) 3454-8500</p>
                <p><i class="fas fa-map-marker-alt"></i> Av.Sampaio vidal,45 - Centro, Marilia - SP</p>
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
