<?php
session_start();
$currentPage = 'formulario-pet';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Pet - Clínica Veterinária</title>
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
                <li><a href="{{url ('servicos')}}">Serviços</a></li>
                <li><a href="{{url ('contato')}}">Contato</a></li>
                <li><a href="{{url ('formulario')}}"class="active">Formulário Pet</a></li>
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

  

    <!-- Formulário -->
    <section class="formulario-section">
        <div class="container">
            <div class="formulario-content">
                <div class="form-container">
                    <h2><i class="fas fa-paw"></i> Informações do Pet</h2>
                    <form class="pet-form" id="petForm" action="processa.php" method="POST">
                        <input type="hidden" name="action" value="formulario-pet">
                        <!-- Informações Básicas -->
                        <div class="form-section">
                            <h3><i class="fas fa-info-circle"></i> Informações Básicas</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nomePet">Nome do Pet *</label>
                                    <input type="text" id="nomePet" name="nomePet" required>
                                </div>
                                <div class="form-group">
                                    <label for="especie">Espécie *</label>
                                    <select id="especie" name="especie" required>
                                        <option value="">Selecione...</option>
                                        <option value="cachorro">Cachorro</option>
                                        <option value="gato">Gato</option>
                                        <option value="ave">Ave</option>
                                        <option value="roedor">Roedor</option>
                                        <option value="reptil">Réptil</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="raca">Raça</label>
                                    <input type="text" id="raca" name="raca">
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade (anos)</label>
                                    <input type="number" id="idade" name="idade" min="0" max="30">
                                </div>
                                <div class="form-group">
                                    <label for="peso">Peso (kg)</label>
                                    <input type="number" id="peso" name="peso" min="0" step="0.1">
                                </div>
                                <div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <select id="sexo" name="sexo">
                                        <option value="">Selecione...</option>
                                        <option value="macho">Macho</option>
                                        <option value="femea">Fêmea</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Histórico de Saúde -->
                        <div class="form-section">
                            <h3><i class="fas fa-heartbeat"></i> Histórico de Saúde</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="vacinas">Vacinas em dia?</label>
                                    <select id="vacinas" name="vacinas">
                                        <option value="">Selecione...</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                        <option value="nao_sei">Não sei</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="vermifugacao">Vermífugo em dia?</label>
                                    <select id="vermifugacao" name="vermifugacao">
                                        <option value="">Selecione...</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                        <option value="nao_sei">Não sei</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="castrado">Castrado/Esterilizado?</label>
                                    <select id="castrado" name="castrado">
                                        <option value="">Selecione...</option>
                                        <option value="sim">Sim</option>
                                        <option value="nao">Não</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="doencas">Doenças prévias</label>
                                    <textarea id="doencas" name="doencas" rows="3" placeholder="Descreva doenças, cirurgias ou tratamentos anteriores..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Comportamento -->
                        <div class="form-section">
                            <h3><i class="fas fa-smile"></i> Comportamento</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="temperamento">Temperamento</label>
                                    <select id="temperamento" name="temperamento">
                                        <option value="">Selecione...</option>
                                        <option value="calmo">Calmo</option>
                                        <option value="agitado">Agitado</option>
                                        <option value="medroso">Medroso</option>
                                        <option value="agressivo">Agressivo</option>
                                        <option value="amigavel">Amigável</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="socializacao">Como se comporta com outros animais?</label>
                                    <select id="socializacao" name="socializacao">
                                        <option value="">Selecione...</option>
                                        <option value="muito_social">Muito social</option>
                                        <option value="social">Social</option>
                                        <option value="neutro">Neutro</option>
                                        <option value="agressivo">Agressivo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comportamento_estranho">Algum comportamento estranho?</label>
                                    <textarea id="comportamento_estranho" name="comportamento_estranho" rows="3" placeholder="Descreva comportamentos incomuns..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Alimentação -->
                        <div class="form-section">
                            <h3><i class="fas fa-utensils"></i> Alimentação</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="tipo_alimentacao">Tipo de alimentação</label>
                                    <select id="tipo_alimentacao" name="tipo_alimentacao">
                                        <option value="">Selecione...</option>
                                        <option value="racao">Ração</option>
                                        <option value="comida_caseira">Comida caseira</option>
                                        <option value="mista">Mista</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="frequencia_alimentacao">Frequência de alimentação</label>
                                    <select id="frequencia_alimentacao" name="frequencia_alimentacao">
                                        <option value="">Selecione...</option>
                                        <option value="1_vez_dia">1 vez ao dia</option>
                                        <option value="2_vezes_dia">2 vezes ao dia</option>
                                        <option value="3_vezes_dia">3 vezes ao dia</option>
                                        <option value="livre">Livre demanda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alergias">Alergias alimentares</label>
                                    <textarea id="alergias" name="alergias" rows="2" placeholder="Descreva alergias conhecidas..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Informações do Tutor -->
                        <div class="form-section">
                            <h3><i class="fas fa-user"></i> Informações do Tutor</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nomeTutor">Nome do Tutor *</label>
                                    <input type="text" id="nomeTutor" name="nomeTutor" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone">Telefone *</label>
                                    <input type="tel" id="telefone" name="telefone" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="endereco">Endereço</label>
                                    <textarea id="endereco" name="endereco" rows="2"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Motivo da Consulta -->
                        <div class="form-section">
                            <h3><i class="fas fa-stethoscope"></i> Motivo da Consulta</h3>
                            <div class="form-group">
                                <label for="motivo_consulta">Descreva o motivo da consulta *</label>
                                <textarea id="motivo_consulta" name="motivo_consulta" rows="4" required placeholder="Descreva os sintomas, quando começaram, e qualquer informação relevante..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="urgencia">Nível de urgência</label>
                                <select id="urgencia" name="urgencia">
                                    <option value="">Selecione...</option>
                                    <option value="baixa">Baixa - Consulta de rotina</option>
                                    <option value="media">Média - Sintomas leves</option>
                                    <option value="alta">Alta - Sintomas preocupantes</option>
                                    <option value="emergencia">Emergência - Sintomas graves</option>
                                </select>
                            </div>
                        </div>

                        <!-- Termos e Condições -->
                        <div class="form-section">
                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="termos" required>
                                    Concordo com os termos de uso e política de privacidade *
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-label">
                                    <input type="checkbox" name="autorizacao">
                                    Autorizo o uso das informações para fins veterinários
                                </label>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="form-buttons">
                            <button type="submit" class="submit-btn">
                                <i class="fas fa-paper-plane"></i> Enviar Formulário
                            </button>
                            <button type="reset" class="reset-btn">
                                <i class="fas fa-undo"></i> Limpar Formulário
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Sidebar com Informações -->
                <div class="formulario-sidebar">
                    <div class="sidebar-content">
                        <h3><i class="fas fa-lightbulb"></i> Dicas Importantes</h3>
                        <ul>
                            <li><i class="fas fa-check"></i> Preencha todos os campos obrigatórios (*)</li>
                            <li><i class="fas fa-check"></i> Seja o mais detalhado possível nos sintomas</li>
                            <li><i class="fas fa-check"></i> Inclua informações sobre mudanças recentes</li>
                            <li><i class="fas fa-check"></i> Traga exames anteriores se disponíveis</li>
                        </ul>

                        <div class="emergency-info">
                            <h4><i class="fas fa-exclamation-triangle"></i> Emergência!!!</h4>
                            <p>Se o seu pet está com sintomas graves, ligue imediatamente:</p>
                            <div class="emergency-phone">(11) 9999-9999</div>
                            <br>
                            <P>Ou</P>
                            <br>
                            <h4>venha ao nosso endereço</h4>
                            <p> Rua das Flores, 123</p>
                        </div>

                        <div class="horario-info">
                            <h4><i class="fas fa-clock"></i> Horário de Atendimento</h4>
                            <p>Segunda a Sexta: 8h às 18h</p>
                            <p>Sábado: 8h às 12h</p>
                            <p>Emergências: 24h</p>
                        </div>
                    </div>
                </div>
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
    <script>
        // Validação do formulário
        document.getElementById('petForm').addEventListener('submit', function(e) {
            const nomePet = document.getElementById('nomePet').value;
            const especie = document.getElementById('especie').value;
            const nomeTutor = document.getElementById('nomeTutor').value;
            const telefone = document.getElementById('telefone').value;
            const motivoConsulta = document.getElementById('motivo_consulta').value;
            const termos = document.querySelector('input[name="termos"]').checked;
            
            if (!nomePet || !especie || !nomeTutor || !telefone || !motivoConsulta || !termos) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios e aceite os termos.');
                return;
            }
            // Permite o envio ao processador PHP
        });

        // Validação em tempo real
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
