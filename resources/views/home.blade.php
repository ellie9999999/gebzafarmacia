<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - GebzaFarmacia</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: radial-gradient(circle at top left, #f4f4f9, #e0daf5);
      overflow: hidden;
      position: relative;
    }
    /* Slide up animation */
    @keyframes slideUp { from { transform: translateY(80px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    /* Floating animation */
    @keyframes float { 0%,100% { transform: translateY(0) rotate(0deg); opacity: 0.8; } 50% { transform: translateY(-25px) rotate(45deg); opacity: 0.5; } }
    @keyframes pulse { 0% { box-shadow: 0 0 0 0 rgba(111,66,193,0.4); } 70% { box-shadow: 0 0 0 20px rgba(111,66,193,0); } 100% { box-shadow: 0 0 0 0 rgba(111,66,193,0); } }

    .pill, .bottle {
      position: absolute;
      animation: float 6s ease-in-out infinite;
    }
    .pill {
      color: #6f42c1;
      font-size: 2.2rem;
    }
    .pill.glow { animation: pulse 2s infinite, float 6s ease-in-out infinite; }
    .bottle {
      width: 40px;
      opacity: 0.9;
    }
    .bottle.glow { animation: pulse 2s infinite, float 6s ease-in-out infinite; }
    /* Overlay & Card */
    .overlay {
      background: rgba(255, 255, 255, 0.9);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }
    .card-login {
      border-radius: 25px;
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
      overflow: hidden;
      animation: slideUp 1s ease-out;
      transition: transform .3s;
      position: relative;
      z-index: 1;
    }
    .card-login:hover { transform: scale(1.03); }
    .card-login::before {
      content: '';
      position: absolute;
      top: -50%; left: -50%;
      width: 200%; height: 200%;
      background: conic-gradient(from 0deg at 50% 50%, rgba(111,66,193,0.2), transparent 20%);
      animation: rotate 10s infinite linear;
      z-index: -1;
    }
    @keyframes rotate { to { transform: rotate(360deg); } }
    /* Buttons & Forms */
    .btn-pharma {
      background-color: #6f42c1;
      color: #fff;
      border-radius: 50px;
      padding: 12px;
      transition: transform .2s, box-shadow .2s;
    }
    .btn-pharma:hover {
      transform: scale(1.1);
      box-shadow: 0 0 20px rgba(111,66,193,0.5);
    }
    .link-register { color: #6f42c1; }
    .link-register:hover { text-decoration: underline; }
    .form-icon {
      position: absolute;
      top: 14px;
      left: 18px;
      color: #6f42c1;
    }
    .form-control { padding-left: 3rem; border-radius: 50px; }
    .pharma-slogan { font-style: italic; color: #444; }
    .bg-morado { background-color: #6f42c1 !important; }
    .text-white { color: #fff !important; }
  </style>
</head>
<body>
  <!-- Floating pills -->
  <i class="bi bi-capsule pill" style="top:15%; left:5%; animation-delay:0s;"></i>
  <i class="bi bi-capsule pill glow" style="top:25%; left:90%; animation-delay:1s;"></i>
  <i class="bi bi-capsule pill" style="top:60%; left:10%; animation-delay:3s; animation-duration:7s;"></i>
  <i class="bi bi-capsule pill" style="top:75%; left:80%; animation-delay:2s; animation-duration:8s;"></i>
  <i class="bi bi-capsule pill glow" style="top:50%; left:50%; font-size:3rem; animation-delay:4s; animation-duration:6s;"></i>

  <!-- Floating bottles -->
  <img src="https://cdn-icons-png.flaticon.com/512/2919/2919607.png" class="bottle glow" style="top:20%; left:20%; animation-delay:2s;">
  <img src="https://cdn-icons-png.flaticon.com/512/2919/2919607.png" class="bottle" style="top:40%; left:85%; animation-delay:4s; animation-duration:8s;">
  <img src="https://cdn-icons-png.flaticon.com/512/2919/2919607.png" class="bottle" style="top:80%; left:30%; animation-delay:1s; animation-duration:7s;">

  <!-- Top Bar -->
  <div class="top-bar bg-morado text-white py-4 border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
      <a href="/" class="text-decoration-none text-white"><i class="bi bi-capsule"></i> Inicio</a>
      <a href="https://wa.me/50370000000" class="text-decoration-none text-white"><i class="bi bi-whatsapp"></i> WhatsApp</a>
    </div>
  </div>

  <!-- Card -->
  <div class="overlay">
    <div class="card card-login w-100" style="max-width: 440px;">
      <div class="card-body px-5 py-5 text-center">
        <!-- Medicine Bottle Logo -->
        <img src="https://cdn-icons-png.flaticon.com/512/2919/2919607.png" alt="Botella" width="60" class="mb-3">
        <h3 class="fw-bold mb-2">GebzaFarmacia</h3>
        <p class="pharma-slogan mb-4">"Tu salud, nuestra prioridad"</p>
        <form method="POST" action="{{ route('login.post') }}">
          @csrf
          <div class="mb-4 position-relative">
            <i class="bi bi-envelope form-icon"></i>
            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Correo electrónico" required>
          </div>
          <div class="mb-4 position-relative">
            <i class="bi bi-lock form-icon"></i>
            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Contraseña" required>
          </div>
          <button type="submit" class="btn btn-pharma btn-lg w-100 mb-3">Iniciar sesión</button>
        </form>
        @if($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mt-3">
          <a href="{{ route('register') }}" class="link-register">¿No tienes cuenta? Regístrate</a>
          <a href="/" class="text-white">Volver al inicio</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="bottom-bar bg-morado text-white py-4 border-top">
    <div class="container d-flex justify-content-end align-items-center">
      <a href="https://wa.me/50370000000" class="text-decoration-none text-white me-3"><i class="bi bi-whatsapp"></i> WhatsApp</a>
      <i class="bi bi-capsule"></i>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


