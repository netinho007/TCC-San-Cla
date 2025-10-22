<?php
session_start();
$currentPage = 'contato';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Clínica Veterinária</title>
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
                <li><a href="{{url ('contato')}}" class="active">Contato</a></li>
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

  


    <!-- Contato Form -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-content">
                <div class="form-container">
                    <h2>Envie uma Mensagem</h2>
                    <form class="contact-form" id="contactForm" action="processa.php" method="POST">
                        <input type="hidden" name="action" value="contato">
                        <div class="form-group">
                            <label for="name">Nome Completo *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="pet-name">Nome do Pet</label>
                            <input type="text" id="pet-name" name="pet-name">
                        </div>
                        <div class="form-group">
                            <label for="pet-type">Tipo de Pet</label>
                            <select id="pet-type" name="pet-type">
                                <option value="">Selecione...</option>
                                <option value="cachorro">Cachorro</option>
                                <option value="gato">Gato</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="service">Serviço de Interesse</label>
                            <select id="service" name="service">
                                <option value="">Selecione...</option>
                                <option value="consulta">Consulta</option>
                                <option value="vacina">Vacinação</option>
                                <option value="cirurgia">Cirurgia</option>
                                <option value="exame">Exames</option>
                                <option value="emergencia">Emergência</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem *</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Descreva o motivo do contato..."></textarea>
                        </div>
                        <div class="form-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" value="yes">
                                <span class="checkmark"></span>
                                Desejo receber novidades e dicas sobre cuidados com pets
                            </label>
                        </div>
                        <button type="submit" class="submit-btn">Enviar Mensagem</button>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Mapa Section -->


    <!-- Perguntas Frequentes Section -->
    <section class="">
        <div class="">
            
          

           <center>

           <section class="mission-section">
        <div class="container">
            <div class="mission-grid">
            <div class="mission-card">                   
                    <h3>Vocês fazem atendimento domiciliar?</h3>
                    <p>Sim, oferecemos atendimento domiciliar para casos específicos. Entre em contato para mais informações.</p>

                </div>
                <div class="mission-card">                  
                    <h3>Vocês atendem emergências?</h3>
                    <p>Sim! Oferecemos atendimento de emergência 24 horas por dia, todos os dias da semana.</p>
                </div>
                <div class="mission-card">                    
                    <h3>Quais formas de pagamento vocês aceitam?</h3>
                    <p>Aceitamos dinheiro, cartões de crédito e débito, PIX e transferência bancária.</p>

                </div>
               
            </div>
            <br>
            <br>
              <!-- Contato Information -->
        
            <div class="mission-grid">
                <div class="mission-card">
                    <i class=""></i>
                    <h3>Telefone</h3>
                    <p>(14) 3454-8500</p>
                </div>
               
                
                <div class="mission-card">
                    <i class=""></i>
                    <h3>Horário de Funcionamento</h3>
                    <p>Segunda a Sexta: 8h às 18h</p>
                    <p>Sábado: 8h às 12h</p>
                    <p><strong>Emergências: 24h</strong></p>
                </div>
            </div>
        
        <br>

    
    
           
            
                    <div class="mission-card">
                        <h3>Por que escolher a SanClá Marília?</h3>
                        <ul>
                            <p> Equipe especializada e experiente </p> 
                            <p> Atendimento 24h para emergências  </p>
                            <p> Infraestrutura moderna e completa </p>
                            <p> Preços justos e transparentes     </p>
                            <p> Amor e dedicação aos animais      </p>
                        </ul>                      
                    </div>
                </div>
          </div>
     </div>
     </div>
                </section>
        
    

       
                </center>
   
                   
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
.
       

        <!-- Botão flutuante de WhatsApp com ícone SVG -->
<a href="https://wa.me/5515991636565?"
   target="_blank"
   style="position: fixed; bottom: 20px; right: 20px; background-color: #25D366; color: white; border-radius: 50px; padding: 12px 20px 12px 16px; text-decoration: none; font-family: Arial, sans-serif; font-size: 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); display: flex; align-items: center; gap: 10px; z-index: 1000;">
   
   <!-- Ícone SVG do WhatsApp -->
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="24" height="24" fill="white">
     <path d="M16.001 2.998c-7.352 0-13.333 5.981-13.333 13.333 0 2.354.614 4.652 1.777 6.667l-1.854 6.767 6.938-1.823c1.938 1.052 4.104 1.612 6.471 1.612 7.352 0 13.333-5.98 13.333-13.333s-5.981-13.333-13.333-13.333zM16 26.667c-2.021 0-3.979-.542-5.688-1.562l-.406-.24-4.104 1.083 1.125-4.073-.26-.417c-1.063-1.687-1.625-3.646-1.625-5.656 0-5.885 4.781-10.667 10.667-10.667 5.886 0 10.667 4.781 10.667 10.667 0 5.885-4.781 10.667-10.667 10.667zm5.625-8.646c-.302-.156-1.781-.885-2.062-.99-.281-.104-.49-.156-.698.157s-.802.99-.99 1.198c-.187.208-.365.229-.667.073-.302-.157-1.271-.469-2.419-1.49-.894-.797-1.5-1.781-1.677-2.083-.177-.302-.019-.469.135-.625.135-.135.302-.354.448-.531.156-.177.208-.302.313-.5.104-.208.052-.385-.026-.531-.078-.146-.698-1.677-.958-2.313-.25-.594-.5-.51-.698-.51h-.594c-.208 0-.531.073-.802.385s-1.052 1.031-1.052 2.51 1.076 2.917 1.229 3.125c.156.208 2.104 3.219 5.104 4.51.713.313 1.271.5 1.708.636.719.229 1.375.198 1.896.12.583-.094 1.781-.729 2.031-1.438.25-.708.25-1.323.177-1.437-.073-.114-.271-.177-.573-.323z"/>
   </svg>

   <span>Fale Conosco</span> 
  
  </a>

  <a href="https://www.instagram.com/sanclamarilia/#"
   target="_blank"
   style="position: fixed; bottom: 80px; right: 20px; background: linear-gradient(45deg, #feda75, #fa7e1e, #d62976, #962fbf, #4f5bd5); color: white; border-radius: 50px; padding: 12px 20px 12px 16px; text-decoration: none; font-family: Arial, sans-serif; font-size: 16px; box-shadow: 0 4px 6px rgba(0,0,0,0.15); display: flex; align-items: center; gap: 10px; z-index: 1000;">

   <!-- Ícone visível do Instagram -->
   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 448 512" fill="white">
     <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9S160.5 370.9 224.1 370.9 339 319.6 339 255.9 287.7 141 224.1 141zm0 188.6c-40.6 0-73.7-33.1-73.7-73.7s33.1-73.7 73.7-73.7 73.7 33.1 73.7 73.7-33.1 73.7-73.7 73.7zm146.4-194.3c0 14.9-12 26.9-26.9 26.9-14.9 0-26.9-12-26.9-26.9s12-26.9 26.9-26.9c14.9 0 26.9 12 26.9 26.9zM398.8 80c-7.8-19.6-22.9-34.7-42.6-42.6C334.1 32 278.4 32 224 32s-110.1 0-132.2 5.4c-19.6 7.8-34.7 22.9-42.6 42.6C44 102.1 44 157.8 44 212.2s0 110.1 5.4 132.2c7.8 19.6 22.9 34.7 42.6 42.6C113.9 400 169.6 400 224 400s110.1 0 132.2-5.4c19.6-7.8 34.7-22.9 42.6-42.6C404 322.3 404 266.6 404 212.2s0-110.1-5.2-132.2zM224 338c-68.5 0-124-55.5-124-124S155.5 90 224 90s124 55.5 124 124-55.5 124-124 124z"/>
   </svg>

   <span>Instagram</span>
</a>

    </footer>
</b>
    <script src="{{url ('js/script.js')}}"></script>
    <script>
        // Validação do formulário de contato
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            if (!name || !email || !message) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios.');
                return;
            }
            // Permite o envio ao processador PHP
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
