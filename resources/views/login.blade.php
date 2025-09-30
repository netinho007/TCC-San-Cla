<?php
session_start();
$currentPage = 'login';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica Veterinária</title>
    <link rel="stylesheet" href="{{url ('css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <img src="img\logo.webp" width="200px" height="50px">
            <ul class="nav-links">
                <li><a href="{{url ('home')}}">Início</a></li>
                <li><a href="{{url ('sobrenos')}}">Sobre Nós</a></li>
                <li><a href="{{url ('servicos')}}">Serviços</a></li>
                <li><a href="{{url ('contato')}}">Contato</a></li>
                <li><a href="{{url ('formulario')}}">Formulário Pet</a></li>
                <li><a href="{{url ('login')}}" class="active">Login</a></li>
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

      <!-- Login Section -->
    <section class="login-section">
        <div class="container">
            <div class="login-content">
                <div class="login-container">
                    <h2><i class="fas fa-user-circle"></i> Login</h2>
                    <form class="login-form" id="loginForm" action="processo.php" method="POST">
                        <input type="hidden" name="action" value="login">
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Senha *</label>
                            <div class="password-input">
                                <input type="password" id="password" name="password" required>
                                <button type="button" class="toggle-password">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="form-options">
                            <label class="checkbox-label">
                                <input type="checkbox" name="remember">
                                <span class="checkmark"></span>
                                Lembrar de mim
                            </label>
                            <a href="#" class="forgot-password">Esqueceu a senha?</a>
                        </div>
                        <button type="submit" class="login-btn">
                            <i class="fas fa-sign-in-alt"></i> Entrar
                        </button>
                        <div class="register-link">
                        <p>Não tem uma conta? <a href="{{url ('cadastro')}}">Cadastre-se aqui</a></p>
                    </div>
                </div>
                    </form>
                    </div>
                    <br>
                    <br>
                <div class="login-sidebar">
                    <div class="sidebar-card">
                        <h3><i class="fas fa-shield-alt"></i> Segurança</h3>
                        <p>Seus dados estão protegidos com criptografia de ponta a ponta.</p>
                    </div>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-clock"></i> Acesso 24h</h3>
                        <p>Acesse sua conta a qualquer momento para ver o histórico do seu pet.</p>
                    </div>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-bell"></i> Notificações</h3>
                        <p>Receba lembretes de vacinas e consultas em tempo real.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rodapé -->
     <b>
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SanClá Marília</h3>
                    <p>Cuidando do seu melhor amigo com amor e dedicação.</p>
                </div>
                <div class="footer-section">
                    <h3>Contato</h3>
                    <p><i class="fas fa-phone"></i> (11) 99999-9999</p>
                    <p><i class="fas fa-envelope"></i> contato@sanclamarilia.com</p>
                </div>
                <div class="footer-section">
                    <h3>Horário</h3>
                    <p>Segunda a Sexta: 8h às 18h</p>
                    <p>Sábado: 8h às 12h</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> SanClá Marília. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    </b>

    <script src="{{url ('js/script.js')}}"></script>
    <script>
        // Toggle password visibility
        document.querySelector('.toggle-password').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Login form validation
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios.');
                return;
            }
            // Permite o envio ao processo.php
        });

        // Real-time validation
        const requiredFields = document.querySelectorAll('[required]');
        requiredFields.forEach(field => {
            field.addEventListener('blur', function() {
                if (!this.value) {
                    this.style.borderColor = '#ff4444';
                } else {
                    this.style.borderColor = '#4CAF50';
                }
            });
        });
    </script>
</body>
</html>
