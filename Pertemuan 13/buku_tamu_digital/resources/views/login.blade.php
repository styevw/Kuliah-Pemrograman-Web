<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Access</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        body {
            
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.9)), 
                        url('https://images.unsplash.com/photo-1514362545857-3bc16549766b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
            overflow: hidden; 
        }

        .login-glass {
            background: rgba(0, 0, 0, 0.6); 
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(212, 175, 55, 0.2); 
            border-radius: 30px;
            padding: 50px 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 0 50px rgba(0,0,0,0.8);
            position: relative;
            overflow: hidden;
        }

        .login-glass::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(212,175,55,0.1) 0%, transparent 60%);
            z-index: -1;
        }

        h2 {
            font-family: 'Playfair Display', serif;
            color: #d4af37;
            margin-bottom: 5px;
        }

        .text-muted {
            color: rgba(255, 255, 255, 0.5) !important;
            font-size: 0.9rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .input-group-text {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #d4af37;
            border-radius: 50px 0 0 50px; 
            padding-left: 20px;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            padding: 12px;
            border-radius: 0 50px 50px 0;
            transition: all 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            color: white;
        }
        
        .form-control::placeholder { color: rgba(255,255,255,0.3); }

        .btn-gold {
            background: linear-gradient(90deg, #d4af37, #f3e5ab, #d4af37);
            background-size: 200%;
            border: none;
            color: black;
            font-weight: bold;
            border-radius: 50px;
            padding: 12px;
            width: 100%;
            letter-spacing: 1px;
            transition: 0.5s;
            margin-top: 20px;
        }

        .btn-gold:hover {
            background-position: right center;
            box-shadow: 0 0 20px rgba(212, 175, 55, 0.6);
            transform: scale(1.02);
        }

        .link-back {
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
        }
        
        .link-back:hover { color: #d4af37; }

        .lock-icon {
            font-size: 3rem;
            background: -webkit-linear-gradient(#f3e5ab, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

    <div class="login-glass animate__animated animate__zoomIn">
        
        <div class="text-center mb-5">
            <i class="fas fa-fingerprint lock-icon animate__animated animate__pulse animate__infinite animate__slower"></i>
            <h2>Manager Access</h2>
            <p class="text-muted">Authorized Personnel Only</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger bg-transparent border border-danger text-danger text-center p-2 mb-4 animate__animated animate__shakeX" style="font-size: 0.9rem; border-radius: 15px;">
                <i class="fas fa-exclamation-triangle me-2"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="Email Address" required autocomplete="off">
            </div>

            <div class="input-group mb-4">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-gold">
                AUTHENTICATE <i class="fas fa-arrow-right ms-2"></i>
            </button>
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="link-back">
                <i class="fas fa-chevron-left me-1"></i> Back to Guest Form
            </a>
        </div>
    </div>

</body>
</html>