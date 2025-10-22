<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Clínica Veterinária</title>
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
                <li><a href="{{ route('cadastro') }}">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <section class="forgot-password-section">
        <div class="container">
            <div class="forgot-password-container">
                <h2><i class="fas fa-key"></i> Recuperar Senha</h2>

                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <label for="email">Digite seu e-mail cadastrado</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        @error('email')
                        <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Enviar Link de Recuperação
                    </button>
                </form>

                <div class="login-link">
                    <p>Lembrou sua senha? <a href="{{ route('login') }}">Faça login aqui</a></p>
                </div>
            </div>
        </div>
    </section>

    <style>
        .forgot-password-section {
            padding: 50px 0;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }

        .forgot-password-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 40px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .forgot-password-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .alert {
            padding: 12px 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            color: #dc3545;
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</body>

</html>