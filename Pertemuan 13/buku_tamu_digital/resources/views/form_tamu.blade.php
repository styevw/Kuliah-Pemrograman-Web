<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Experience</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Playfair+Display:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.95)), 
                        url('https://images.unsplash.com/photo-1514362545857-3bc16549766b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
            color: white;
            padding: 40px 0;
        }

        .glass-card {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(212, 175, 55, 0.15);
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }

        h3 { font-family: 'Playfair Display', serif; color: #d4af37; letter-spacing: 1px; }

        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50px;
            padding: 12px 25px;
            transition: all 0.3s;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: #d4af37;
            color: white;
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.1);
        }
        
        .form-label { margin-left: 15px; font-size: 0.85rem; color: #aaa; text-transform: uppercase; letter-spacing: 1px; }

        .star-box {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 20px;
            padding: 15px;
            text-align: center;
            border: 1px solid rgba(255,255,255,0.05);
            transition: 0.3s;
        }
        .star-box:hover { border-color: #d4af37; background: rgba(212, 175, 55, 0.05); }

        .star-rating i { font-size: 1.5rem; color: #444; cursor: pointer; margin: 0 5px; transition: all 0.2s; }
        .star-rating i.active { color: #d4af37; text-shadow: 0 0 15px rgba(212, 175, 55, 0.4); }
        .star-rating i:hover { transform: scale(1.3); color: #f3e5ab; }

        .btn-luxury {
            background: linear-gradient(90deg, #d4af37, #f3e5ab, #d4af37);
            background-size: 200%;
            color: black;
            font-weight: bold;
            border: none;
            border-radius: 50px;
            padding: 14px;
            font-family: 'Montserrat', sans-serif;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: 0.5s;
            box-shadow: 0 5px 20px rgba(212, 175, 55, 0.2);
        }
        .btn-luxury:hover { background-position: right center; transform: translateY(-2px); box-shadow: 0 10px 30px rgba(212, 175, 55, 0.4); }
        
        .manager-link {
            color: rgba(255, 255, 255, 0.4);
            text-decoration: none;
            font-size: 0.8rem;
            transition: 0.3s;
            letter-spacing: 1px;
            cursor: pointer;
        }
        .manager-link:hover { color: #d4af37; text-shadow: 0 0 10px rgba(212, 175, 55, 0.5); }

    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            
            <div class="glass-card animate__animated animate__fadeInUp">
                <div class="text-center mb-5">
                    <i class="fas fa-crown mb-3 animate__animated animate__pulse animate__infinite" style="color: #d4af37; font-size: 2.5rem;"></i>
                    <h3>The Royal Dining</h3>
                    <p class="text-white-50 small text-uppercase">Exclusive Guest Feedback</p>
                </div>

                @if(session('success'))
                    <div class="alert alert-success bg-transparent border-success text-success text-center mb-4 rounded-pill">
                        <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('guestbook.store') }}" method="POST">
                    @csrf 

                    <div class="mb-4">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="customer_name" class="form-control" required placeholder="Nama Anda...">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">WhatsApp (Opsional)</label>
                        <input type="text" name="phone" class="form-control" placeholder="08...">
                    </div>

                    <hr class="my-5" style="border-color: rgba(255,255,255,0.1);">

                    <div class="mb-4 star-box">
                        <label class="d-block mb-2 text-warning" style="font-family: 'Playfair Display';">Kualitas Makanan</label>
                        <div class="star-rating" data-target="score_food">
                            <i class="fas fa-star" data-value="20"></i><i class="fas fa-star" data-value="40"></i><i class="fas fa-star" data-value="60"></i><i class="fas fa-star" data-value="80"></i><i class="fas fa-star" data-value="100"></i>
                        </div>
                        <input type="hidden" name="score_food" id="score_food" value="0" required>
                    </div>

                    <div class="mb-4 star-box">
                        <label class="d-block mb-2 text-warning" style="font-family: 'Playfair Display';">Pelayanan Staff</label>
                        <div class="star-rating" data-target="score_service">
                            <i class="fas fa-star" data-value="20"></i><i class="fas fa-star" data-value="40"></i><i class="fas fa-star" data-value="60"></i><i class="fas fa-star" data-value="80"></i><i class="fas fa-star" data-value="100"></i>
                        </div>
                        <input type="hidden" name="score_service" id="score_service" value="0" required>
                    </div>

                    <div class="mb-4 star-box">
                        <label class="d-block mb-2 text-warning" style="font-family: 'Playfair Display';">Suasana</label>
                        <div class="star-rating" data-target="score_ambiance">
                            <i class="fas fa-star" data-value="20"></i><i class="fas fa-star" data-value="40"></i><i class="fas fa-star" data-value="60"></i><i class="fas fa-star" data-value="80"></i><i class="fas fa-star" data-value="100"></i>
                        </div>
                        <input type="hidden" name="score_ambiance" id="score_ambiance" value="0" required>
                    </div>

                    <div class="mb-5 mt-4">
                        <label class="form-label">Kritik & Saran</label>
                        <textarea name="message" class="form-control" rows="3" style="border-radius: 20px;" placeholder="Tulis masukan Anda..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-luxury w-100">Kirim Penilaian</button>
                    
                    <div class="text-center mt-4 border-top border-secondary pt-3">
                        @auth
                            <p class="text-white-50 small mb-2">Halo, Manager!</p>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="{{ route('admin.dashboard') }}" class="manager-link text-warning">
                                    <i class="fas fa-th-large me-1"></i> Buka Dashboard
                                </a>
                                
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link manager-link text-danger p-0" style="text-decoration: none; font-size: 0.8rem;">
                                        <i class="fas fa-sign-out-alt me-1"></i> Logout
                                    </button>
                                </form>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="manager-link">
                                <i class="fas fa-lock me-1"></i> Manager Access
                            </a>
                        @endauth
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.star-rating').forEach(wrapper => {
        const stars = wrapper.querySelectorAll('i');
        const targetInput = document.getElementById(wrapper.dataset.target);

        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                targetInput.value = star.dataset.value;
                stars.forEach((s, i) => {
                    if (i <= index) {
                        s.classList.add('active');
                        s.classList.add('animate__animated', 'animate__headShake');
                        s.addEventListener('animationend', () => s.classList.remove('animate__animated', 'animate__headShake'));
                    } else {
                        s.classList.remove('active');
                    }
                });
            });
        });
    });
</script>

</body>
</html>