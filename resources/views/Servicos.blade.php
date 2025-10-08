<?php
session_start();
$currentPage = 'servicos';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços - Clínica Veterinária</title>
    <link rel="stylesheet" href="{{url ('css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <img src="{{ asset('img/logo.webp') }}" width="200px" height="50px" alt="Logo da Clínica">
            <ul class="nav-links">
                <li><a href="{{url ('home')}}">Início</a></li>
                <li><a href="{{url ('sobrenos')}}">Sobre Nós</a></li>
                <li><a href="{{url ('servicos')}}" class="active">Serviços</a></li>
                <li><a href="{{url ('contato')}}">Contato</a></li>
                <li><a href="{{url ('formularip')}}">Formulário Pet</a></li>
                <li><a href="{{url ('login')}}">Login</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
    </header>
    <br>
    <br>

   
    <!-- Carrossel de Serviços -->
    <section class="carousel-section">
        <h2>Serviços Especializados</h2>
        <div class="carousel" id="services-carousel">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <div class="slide-content service-slide">
                        <i class="fas fa-stethoscope"></i>
                        <h3>Consultas Veterinárias</h3>
                        <p>Exames clínicos completos, diagnósticos precisos e tratamentos personalizados para cães, gatos e outros pets.</p>
                        <ul>
                            <li>Exame físico completo</li>
                            <li>Diagnóstico de doenças</li>
                            <li>Prescrição de medicamentos</li>
                            <li>Orientações nutricionais</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content service-slide">
                        <i class="fas fa-syringe"></i>
                        <h3>Vacinação</h3>
                        <p>Programa completo de vacinação para proteger seu pet contra doenças infecciosas.</p>
                        <ul>
                            <li>Vacina V8/V10 para cães</li>
                            <li>Vacina V4 para gatos</li>
                            <li>Vacina contra raiva</li>
                            <li>Vacinas específicas por região</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content service-slide">
                        <i class="fas fa-cut"></i>
                        <h3>Cirurgias</h3>
                        <p>Procedimentos cirúrgicos seguros com equipamentos modernos e equipe especializada.</p>
                        <ul>
                            <li>Castração e esterilização</li>
                            <li>Cirurgias ortopédicas</li>
                            <li>Cirurgias de emergência</li>
                            <li>Procedimentos odontológicos</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content service-slide">
                        <i class="fas fa-microscope"></i>
                        <h3>Exames Laboratoriais</h3>
                        <p>Exames de sangue, urina e outros testes para diagnósticos precisos.</p>
                        <ul>
                            <li>Hemograma completo</li>
                            <li>Exames bioquímicos</li>
                            <li>Exames de urina</li>
                            <li>Testes de função hepática e renal</li>
                        </ul>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content service-slide">
                        <i class="fas fa-camera"></i>
                        <h3>Exames de Imagem</h3>
                        <p>Radiografia, ultrassom e outros exames de imagem para diagnósticos avançados.</p>
                        <ul>
                            <li>Radiografia digital</li>
                            <li>Ultrassom abdominal</li>
                            <li>Ecocardiografia</li>
                            <li>Endoscopia</li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="carousel-btn prev" onclick="changeServiceSlide(-1)">&#10094;</button>
            <button class="carousel-btn next" onclick="changeServiceSlide(1)">&#10095;</button>
        </div>
        <div class="carousel-dots" id="services-dots">
            <span class="dot active" onclick="goToServiceSlide(1)"></span>
            <span class="dot" onclick="goToServiceSlide(2)"></span>
            <span class="dot" onclick="goToServiceSlide(3)"></span>
            <span class="dot" onclick="goToServiceSlide(4)"></span>
            <span class="dot" onclick="goToServiceSlide(5)"></span>
        </div>
    </section>

    <!-- Depoimentos Carrossel -->
    <section class="carousel-section testimonials">
        <h2>Depoimentos dos Nossos Clientes</h2>
        <div class="carousel" id="testimonials-carousel">
            <div class="carousel-container">
                <div class="carousel-slide active">
                    <div class="slide-content testimonial-slide">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>"A equipe da SanClá Marília salvou a vida do meu cachorro Max. Profissionais incríveis e muito atenciosos!"</p>
                            <div class="testimonial-author">
                                <strong>Maria Silva</strong>
                                <span>Tutora do Max</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content testimonial-slide">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>"Excelente atendimento! Minha gata Luna recebeu cuidados especiais e hoje está muito saudável."</p>
                            <div class="testimonial-author">
                                <strong>João Santos</strong>
                                <span>Tutor da Luna</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content testimonial-slide">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>"Clínica muito bem equipada e veterinários muito competentes. Recomendo para todos!"</p>
                            <div class="testimonial-author">
                                <strong>Ana Costa</strong>
                                <span>Tutora do Thor</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-slide">
                    <div class="slide-content testimonial-slide">
                        <div class="testimonial-content">
                            <i class="fas fa-quote-left"></i>
                            <p>"Atendimento 24h salvou meu pet em uma emergência. Equipe muito dedicada!"</p>
                            <div class="testimonial-author">
                                <strong>Pedro Lima</strong>
                                <span>Tutor da Bella</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-btn prev" onclick="changeTestimonialSlide(-1)">&#10094;</button>
            <button class="carousel-btn next" onclick="changeTestimonialSlide(1)">&#10095;</button>
        </div>
        <div class="carousel-dots" id="testimonials-dots">
            <span class="dot active" onclick="goToTestimonialSlide(1)"></span>
            <span class="dot" onclick="goToTestimonialSlide(2)"></span>
            <span class="dot" onclick="goToTestimonialSlide(3)"></span>
            <span class="dot" onclick="goToTestimonialSlide(4)"></span>
        </div>
    </section>

    <!-- Serviços Adicionais -->
    <section class="additional-services">
        <h2>Outros Serviços</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-pills"></i>
                <h3>Farmácia Veterinária</h3>
                <p>Medicamentos, vitaminas e produtos para o cuidado do seu pet</p>
            </div>
            <div class="service-card">
                <i class="fas fa-home"></i>
                <h3>Atendimento Domiciliar</h3>
                <p>Consultas e procedimentos na comodidade da sua casa</p>
            </div>
            <div class="service-card">
                <i class="fas fa-bath"></i>
                <h3>Banho e Tosa</h3>
                <p>Serviços de higiene e beleza para seu pet</p>
            </div>
            <div class="service-card">
                <i class="fas fa-heart"></i>
                <h3>Emergências 24h</h3>
                <p>Atendimento de emergência a qualquer hora</p>
            </div>
        </div>
    </section>

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
