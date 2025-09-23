<?php
session_start();
$currentPage = 'cadastro';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Clínica Veterinária</title>
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
                <li><a href="{{url ('furmulario')}}">Formulário Pet</a></li>
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
    <!-- Cadastro Section -->
    <section class="cadastro-section">
        <div class="container">
            <div class="cadastro-content">
                <div class="cadastro-container">
                    <h2><i class="fas fa-user-plus"></i> Cadastro</h2>
                    <form class="cadastro-form" id="cadastroForm" action="processo.php" method="POST">
                        <input type="hidden" name="action" value="cadastro">
                        <!-- Informações Pessoais -->
                        <div class="form-section">
                            <h3><i class="fas fa-user"></i> Informações Pessoais</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nome">Nome Completo *</label>
                                    <input type="text" id="nome" name="nome" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpf">CPF *</label>
                                    <input type="text" id="cpf" name="cpf" required>
                                </div>
                                <div class="form-group">
                                    <label for="dataNascimento">Data de Nascimento *</label>
                                    <input type="date" id="dataNascimento" name="dataNascimento" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone *</label>
                                    <input type="tel" id="telefone" name="telefone" required>
                                </div>
                            </div>
                        </div>

                        <!-- Informações de Contato -->
                        <div class="form-section">
                            <h3><i class="fas fa-envelope"></i> Informações de Contato</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="email">E-mail *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmEmail">Confirmar E-mail *</label>
                                    <input type="email" id="confirmEmail" name="confirmEmail" required>
                                </div>
                            </div>
                        </div>

                        <!-- Endereço -->
                        <div class="form-section">
                            <h3><i class="fas fa-map-marker-alt"></i> Endereço</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="cep">CEP *</label>
                                    <input type="text" id="cep" name="cep" required>
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço *</label>
                                    <input type="text" id="endereco" name="endereco" required>
                                </div>
                                <div class="form-group">
                                    <label for="numero">Número *</label>
                                    <input type="text" id="numero" name="numero" required>
                                </div>
                                <div class="form-group">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" id="complemento" name="complemento">
                                </div>
                                <div class="form-group">
                                    <label for="bairro">Bairro *</label>
                                    <input type="text" id="bairro" name="bairro" required>
                                </div>
                                <div class="form-group">
                                    <label for="cidade">Cidade *</label>
                                    <input type="text" id="cidade" name="cidade" required>
                                </div>
                                <div class="form-group">
                                    <label for="estado">Estado *</label>
                                    <select id="estado" name="estado" required>
                                        <option value="">Selecione...</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Senha -->
                        <div class="form-section">
                            <h3><i class="fas fa-lock"></i> Senha</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="senha">Senha *</label>
                                    <div class="password-input">
                                        <input type="password" id="senha" name="senha" required>
                                        <button type="button" class="toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmSenha">Confirmar Senha *</label>
                                    <div class="password-input">
                                        <input type="password" id="confirmSenha" name="confirmSenha" required>
                                        <button type="button" class="toggle-password">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Termos e Condições -->
                        <div class="form-section">
                            <div class="form-options">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="termos" required>
                                    <span class="checkmark"></span>
                                    Li e aceito os <a href="#" class="terms-link">Termos de Uso</a> e <a href="#" class="terms-link">Política de Privacidade</a> *
                                </label>
                                <label class="checkbox-label">
                                    <input type="checkbox" name="newsletter">
                                    <span class="checkmark"></span>
                                    Desejo receber novidades e promoções por e-mail
                                </label>
                            </div>
                        </div>

                        <div class="form-buttons">
                            <button type="submit" class="cadastro-btn">
                                <i class="fas fa-user-plus"></i> Criar Conta
                            </button>
                            <button type="reset" class="reset-btn">
                                <i class="fas fa-undo"></i> Limpar Formulário
                            </button>
                        </div>
                    </form>
                    <div class="login-link">
                        <p>Já tem uma conta? <a href="login.php">Faça login aqui</a></p>
                    </div>
                </div>
                <div class="cadastro-sidebar">
                    <div class="sidebar-card">
                        <h3><i class="fas fa-shield-alt"></i> Segurança</h3>
                        <p>Seus dados estão protegidos com criptografia de ponta a ponta.</p>
                    </div>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-calendar-check"></i> Agendamento Online</h3>
                        <p>Agende consultas e exames diretamente pela plataforma.</p>
                    </div>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-history"></i> Histórico Completo</h3>
                        <p>Acompanhe todo o histórico médico do seu pet em um só lugar.</p>
                    </div>
                    <div class="sidebar-card">
                        <h3><i class="fas fa-bell"></i> Notificações</h3>
                        <p>Receba lembretes de vacinas, consultas e resultados de exames.</p>
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

        // Cadastro form validation
        document.getElementById('cadastroForm').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            const confirmEmail = document.getElementById('confirmEmail').value;
            const senha = document.getElementById('senha').value;
            const confirmSenha = document.getElementById('confirmSenha').value;
            const termos = document.querySelector('input[name="termos"]').checked;
            
            if (!termos) {
                e.preventDefault();
                alert('Você deve aceitar os termos de uso para continuar.');
                return;
            }
            
            if (email !== confirmEmail) {
                e.preventDefault();
                alert('Os e-mails não coincidem.');
                return;
            }
            
            if (senha !== confirmSenha) {
                e.preventDefault();
                alert('As senhas não coincidem.');
                return;
            }
            
            if (senha.length < 6) {
                e.preventDefault();
                alert('A senha deve ter pelo menos 6 caracteres.');
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

        // Email confirmation validation
        document.getElementById('confirmEmail').addEventListener('blur', function() {
            const email = document.getElementById('email').value;
            const confirmEmail = this.value;
            
            if (confirmEmail && email !== confirmEmail) {
                this.style.borderColor = '#ff4444';
            } else if (confirmEmail) {
                this.style.borderColor = '#4CAF50';
            }
        });

        // Password confirmation validation
        document.getElementById('confirmSenha').addEventListener('blur', function() {
            const senha = document.getElementById('senha').value;
            const confirmSenha = this.value;
            
            if (confirmSenha && senha !== confirmSenha) {
                this.style.borderColor = '#ff4444';
            } else if (confirmSenha) {
                this.style.borderColor = '#4CAF50';
            }
        });
    </script>
</body>
</html>
