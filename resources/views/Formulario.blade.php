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
                <li><a href="{{url ('/')}}">Início</a></li>
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

                    <!-- MENSAGENS DE SUCESSO/ERRO -->
                    @if(session('success'))
                        <div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 12px; border-radius: 5px; margin-bottom: 20px;">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="alert alert-danger" style="background: #f8d7da; color: #721c24; padding: 12px; border-radius: 5px; margin-bottom: 20px;">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="pet-form" id="petForm" action="{{ route('pet.store') }}" method="POST">
                        @csrf
                        
                        <!-- Informações Básicas -->
                        <div class="form-section">
                            <h3><i class="fas fa-info-circle"></i> Informações Básicas</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nome_pet">Nome do Pet *</label>
                                    <input type="text" id="nome_pet" name="nome_pet" value="{{ old('nome_pet', '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="especie">Espécie *</label>
                                    <select id="especie" name="especie" required>
                                        <option value="">Selecione...</option>
                                        <option value="cachorro" {{ old('especie', '') == 'cachorro' ? 'selected' : '' }}>Cachorro</option>
                                        <option value="gato" {{ old('especie', '') == 'gato' ? 'selected' : '' }}>Gato</option>
                                        <option value="ave" {{ old('especie', '') == 'ave' ? 'selected' : '' }}>Ave</option>
                                        <option value="roedor" {{ old('especie', '') == 'roedor' ? 'selected' : '' }}>Roedor</option>
                                        <option value="reptil" {{ old('especie', '') == 'reptil' ? 'selected' : '' }}>Réptil</option>
                                        <option value="outro" {{ old('especie', '') == 'outro' ? 'selected' : '' }}>Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="raca">Raça</label>
                                    <input type="text" id="raca" name="raca" value="{{ old('raca', '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="idade">Idade (anos)</label>
                                    <input type="number" id="idade" name="idade" value="{{ old('idade', '') }}" min="0" max="30">
                                </div>
                                <div class="form-group">
                                    <label for="peso">Peso (kg)</label>
                                    <input type="number" id="peso" name="peso" value="{{ old('peso', '') }}" min="0" step="0.1">
                                </div>
                                <div class="form-group">
                                    <label for="sexo">Sexo</label>
                                    <select id="sexo" name="sexo">
                                        <option value="">Selecione...</option>
                                        <option value="macho" {{ old('sexo', '') == 'macho' ? 'selected' : '' }}>Macho</option>
                                        <option value="femea" {{ old('sexo', '') == 'femea' ? 'selected' : '' }}>Fêmea</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Histórico de Saúde -->
                        <div class="form-section">
                            <h3><i class="fas fa-heartbeat"></i> Histórico de Saúde</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="vacinas_em_dia">Vacinas em dia?</label>
                                    <select id="vacinas_em_dia" name="vacinas_em_dia">
                                        <option value="">Selecione...</option>
                                        <option value="sim" {{ old('vacinas_em_dia', '') == 'sim' ? 'selected' : '' }}>Sim</option>
                                        <option value="nao" {{ old('vacinas_em_dia', '') == 'nao' ? 'selected' : '' }}>Não</option>
                                        <option value="nao_sei" {{ old('vacinas_em_dia', '') == 'nao_sei' ? 'selected' : '' }}>Não sei</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="vermifugacao_em_dia">Vermífugo em dia?</label>
                                    <select id="vermifugacao_em_dia" name="vermifugacao_em_dia">
                                        <option value="">Selecione...</option>
                                        <option value="sim" {{ old('vermifugacao_em_dia', '') == 'sim' ? 'selected' : '' }}>Sim</option>
                                        <option value="nao" {{ old('vermifugacao_em_dia', '') == 'nao' ? 'selected' : '' }}>Não</option>
                                        <option value="nao_sei" {{ old('vermifugacao_em_dia', '') == 'nao_sei' ? 'selected' : '' }}>Não sei</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="castrado">Castrado/Esterilizado?</label>
                                    <select id="castrado" name="castrado">
                                        <option value="">Selecione...</option>
                                        <option value="sim" {{ old('castrado', '') == 'sim' ? 'selected' : '' }}>Sim</option>
                                        <option value="nao" {{ old('castrado', '') == 'nao' ? 'selected' : '' }}>Não</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="doencas_previas">Doenças prévias</label>
                                    <textarea id="doencas_previas" name="doencas_previas" rows="3" placeholder="Descreva doenças, cirurgias ou tratamentos anteriores...">{{ old('doencas_previas', '') }}</textarea>
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
                                        <option value="calmo" {{ old('temperamento', '') == 'calmo' ? 'selected' : '' }}>Calmo</option>
                                        <option value="agitado" {{ old('temperamento', '') == 'agitado' ? 'selected' : '' }}>Agitado</option>
                                        <option value="medroso" {{ old('temperamento', '') == 'medroso' ? 'selected' : '' }}>Medroso</option>
                                        <option value="agressivo" {{ old('temperamento', '') == 'agressivo' ? 'selected' : '' }}>Agressivo</option>
                                        <option value="amigavel" {{ old('temperamento', '') == 'amigavel' ? 'selected' : '' }}>Amigável</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="socializacao">Como se comporta com outros animais?</label>
                                    <select id="socializacao" name="socializacao">
                                        <option value="">Selecione...</option>
                                        <option value="muito_social" {{ old('socializacao', '') == 'muito_social' ? 'selected' : '' }}>Muito social</option>
                                        <option value="social" {{ old('socializacao', '') == 'social' ? 'selected' : '' }}>Social</option>
                                        <option value="neutro" {{ old('socializacao', '') == 'neutro' ? 'selected' : '' }}>Neutro</option>
                                        <option value="agressivo" {{ old('socializacao', '') == 'agressivo' ? 'selected' : '' }}>Agressivo</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="comportamento_estranho">Algum comportamento estranho?</label>
                                    <textarea id="comportamento_estranho" name="comportamento_estranho" rows="3" placeholder="Descreva comportamentos incomuns...">{{ old('comportamento_estranho', '') }}</textarea>
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
                                        <option value="racao" {{ old('tipo_alimentacao', '') == 'racao' ? 'selected' : '' }}>Ração</option>
                                        <option value="comida_caseira" {{ old('tipo_alimentacao', '') == 'comida_caseira' ? 'selected' : '' }}>Comida caseira</option>
                                        <option value="mista" {{ old('tipo_alimentacao', '') == 'mista' ? 'selected' : '' }}>Mista</option>
                                        <option value="outro" {{ old('tipo_alimentacao', '') == 'outro' ? 'selected' : '' }}>Outro</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="frequencia_alimentacao">Frequência de alimentação</label>
                                    <select id="frequencia_alimentacao" name="frequencia_alimentacao">
                                        <option value="">Selecione...</option>
                                        <option value="1_vez_dia" {{ old('frequencia_alimentacao', '') == '1_vez_dia' ? 'selected' : '' }}>1 vez ao dia</option>
                                        <option value="2_vezes_dia" {{ old('frequencia_alimentacao', '') == '2_vezes_dia' ? 'selected' : '' }}>2 vezes ao dia</option>
                                        <option value="3_vezes_dia" {{ old('frequencia_alimentacao', '') == '3_vezes_dia' ? 'selected' : '' }}>3 vezes ao dia</option>
                                        <option value="livre" {{ old('frequencia_alimentacao', '') == 'livre' ? 'selected' : '' }}>Livre demanda</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="alergias">Alergias alimentares</label>
                                    <textarea id="alergias" name="alergias" rows="2" placeholder="Descreva alergias conhecidas...">{{ old('alergias', '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Informações do Tutor -->
                        <div class="form-section">
                            <h3><i class="fas fa-user"></i> Informações do Tutor</h3>
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nome_tutor">Nome do Tutor *</label>
                                    <input type="text" id="nome_tutor" name="nome_tutor" value="{{ old('nome_tutor', '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="telefone_tutor">Telefone *</label>
                                    <input type="tel" id="telefone_tutor" name="telefone_tutor" value="{{ old('telefone_tutor', '') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="email_tutor">E-mail</label>
                                    <input type="email" id="email_tutor" name="email_tutor" value="{{ old('email_tutor', '') }}">
                                </div>
                                <div class="form-group">
                                    <label for="endereco_tutor">Endereço</label>
                                    <textarea id="endereco_tutor" name="endereco_tutor" rows="2">{{ old('endereco_tutor', '') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Motivo da Consulta -->
                        <div class="form-section">
                            <h3><i class="fas fa-stethoscope"></i> Motivo da Consulta</h3>
                            <div class="form-group">
                                <label for="motivo_consulta">Descreva o motivo da consulta *</label>
                                <textarea id="motivo_consulta" name="motivo_consulta" rows="4" required placeholder="Descreva os sintomas, quando começaram, e qualquer informação relevante...">{{ old('motivo_consulta', '') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="urgencia">Nível de urgência</label>
                                <select id="urgencia" name="urgencia">
                                    <option value="">Selecione...</option>
                                    <option value="baixa" {{ old('urgencia', '') == 'baixa' ? 'selected' : '' }}>Baixa - Consulta de rotina</option>
                                    <option value="media" {{ old('urgencia', '') == 'media' ? 'selected' : '' }}>Média - Sintomas leves</option>
                                    <option value="alta" {{ old('urgencia', '') == 'alta' ? 'selected' : '' }}>Alta - Sintomas preocupantes</option>
                                    <option value="emergencia" {{ old('urgencia', '') == 'emergencia' ? 'selected' : '' }}>Emergência - Sintomas graves</option>
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
                                    <input type="checkbox" name="autorizacao_uso" value="1" {{ old('autorizacao_uso') ? 'checked' : '' }}>
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
                            <div class="emergency-phone">(14) 3454-8500</div>
                            <br>
                            <P>Ou</P>
                            <br>
                            <h4>venha ao nosso endereço</h4>
                            <p> Av.Sampaio vidal,45 - Centro, Marilia - SP</p>
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
    <script>
        // Validação do formulário
        document.getElementById('petForm').addEventListener('submit', function(e) {
            const nomePet = document.getElementById('nome_pet').value;
            const especie = document.getElementById('especie').value;
            const nomeTutor = document.getElementById('nome_tutor').value;
            const telefone = document.getElementById('telefone_tutor').value;
            const motivoConsulta = document.getElementById('motivo_consulta').value;
            const termos = document.querySelector('input[name="termos"]').checked;
            
            if (!nomePet || !especie || !nomeTutor || !telefone || !motivoConsulta || !termos) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios e aceite os termos.');
                return;
            }
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