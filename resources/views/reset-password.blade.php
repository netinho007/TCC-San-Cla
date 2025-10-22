<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Senha - Clínica Veterinária</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <img src="{{ asset('img/logo.webp') }}" width="200px" height="50px" alt="Logo da Clínica">
            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="reset-password-section">
        <div class="container">
            <div class="reset-password-container">
                <h2><i class="fas fa-lock"></i> Criar Nova Senha</h2>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" value="{{ $email ?? old('email') }}" required readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Nova Senha *</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password_confirmation">Confirmar Nova Senha *</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-save"></i> Redefinir Senha
                    </button>
                </form>
            </div>
        </div>
    </section>

    <style>
        .reset-password-section {
            padding: 50px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }
        
        .reset-password-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .reset-password-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }
    </style>
</body>
</html>