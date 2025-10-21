<?php
session_start();
$currentPage = 'forgot-password';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Clínica Veterinária</title>
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

    <!-- Forgot Password Section -->
    <section class="forgot-password-section">
        <div class="forgot-password-content">
            <div class="forgot-password-container">
                <div class="forgot-password-header">
                    <h2><i class="fas fa-key"></i> Recuperar Senha</h2>
                    <p>Digite seu email para receber instruções de recuperação de senha</p>
                </div>

                <form class="forgot-password-form" id="forgotPasswordForm">
                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i> Email
                        </label>
                        <input type="email" id="email" name="email" required placeholder="Digite seu email cadastrado">
                    </div>

                    <button type="submit" class="forgot-password-btn">
                        <i class="fas fa-paper-plane"></i> Enviar Instruções
                    </button>
                </form>

                <div class="forgot-password-footer">
                    <p>Lembrou da senha? <a href="{{url ('login')}}">Voltar ao Login</a></p>
                </div>
            </div>

            <div class="forgot-password-sidebar">
                <div class="sidebar-card">
                    <h3><i class="fas fa-shield-alt"></i> Segurança</h3>
                    <p>Suas informações estão protegidas. O link de recuperação será enviado apenas para o email cadastrado.</p>
                </div>

                <div class="sidebar-card">
                    <h3><i class="fas fa-clock"></i> Tempo de Validade</h3>
                    <p>O link de recuperação é válido por 24 horas. Após esse período, será necessário solicitar um novo link.</p>
                </div>

                <div class="sidebar-card">
                    <h3><i class="fas fa-question-circle"></i> Precisa de Ajuda?</h3>
                    <p>Entre em contato conosco pelo telefone <strong>(14) 3454-8500</strong> ou email <strong>contato@sanclamarilia.com</strong></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Message (hidden by default) -->
    <div class="success-message" id="successMessage" style="display: none;">
        <div class="success-content">
            <i class="fas fa-check-circle"></i>
            <h3>Email Enviado!</h3>
            <p>Enviamos as instruções de recuperação para o seu email. Verifique sua caixa de entrada e spam.</p>
            <a href="{{url ('login')}}" class="back-to-login-btn">
                <i class="fas fa-arrow-left"></i> Voltar ao Login
            </a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>SanClá Marília</h3>
                <p>Cuidando do seu melhor amigo com amor e dedicação desde 2010.</p>
            </div>
            <div class="footer-section">
                <h3>Contato</h3>
                <p><i class="fas fa-phone"></i> (14)3454-8500</p>
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

    <script src="{{url ('js/script.js')}}"></script>
</body>
</html>
