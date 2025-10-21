<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Clínica Veterinária</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .alert {
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            border: 1px solid transparent;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }
        .alert ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <img src="{{ asset('img/logo.webp') }}" width="200px" height="50px" alt="Logo da Clínica">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('sobrenos') }}">Sobre Nós</a></li>
                <li><a href="{{ route('servicos') }}">Serviços</a></li>
                <li><a href="{{ route('contato') }}">Contato</a></li>
                <li><a href="{{ route('formulario') }}">Formulário Pet</a></li>
                <li><a href="{{ route('login') }}" class="active">Login</a></li>
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
                    
                    <!-- MENSAGENS DE SUCESSO/ERRO -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="login-form" id="loginForm" action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="email">E-mail *</label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
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
                            <!-- CORREÇÃO: Removido link forgot-password ou use URL direta -->
                            <a href="#" class="forgot-password">Esqueceu a senha?</a>
                        </div>
                        
                        <button type="submit" class="login-btn">
                            <i class="fas fa-sign-in-alt"></i> Entrar
                        </button>
                    </form>
                    
                    <div class="register-link">
                        <p>Não tem uma conta? <a href="{{ route('cadastro') }}">Cadastre-se aqui</a></p>
                    </div>
                </div>
                
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
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>SanClá Marília</h3>
                    <p>Cuidando do seu melhor amigo com amor e dedicação.</p>
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
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} SanClá Marília. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // Toggle password visibility
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const passwordInput = this.previousElementSibling;
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
        });

        // Validação em tempo real (APENAS visual, não impede envio)
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

        // Validação básica do formulário (APENAS alerta, não impede envio)
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (!email || !password) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                // NÃO usa preventDefault() - permite o envio para o Laravel
            }
        });
    </script>
</body>
</html>