<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&family=Playfair+Display:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        :root {
            --sidebar-bg: #111;
            --sidebar-width: 260px;
            --gold: #d4af37;
            --bg-content: #f3f4f6;
            --text-dark: #1f2937;
        }

        body { background-color: var(--bg-content); font-family: 'Inter', sans-serif; overflow-x: hidden; }

        /* --- SIDEBAR --- */
        .sidebar { width: var(--sidebar-width); height: 100vh; background-color: var(--sidebar-bg); position: fixed; top: 0; left: 0; color: #9ca3af; padding: 20px; display: flex; flex-direction: column; z-index: 1000; }
        .brand-logo { font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.4rem; margin-bottom: 40px; display: flex; align-items: center; gap: 10px; padding-left: 10px; }
        .nav-link { display: flex; align-items: center; padding: 12px 15px; color: #9ca3af; text-decoration: none; border-radius: 12px; margin-bottom: 5px; transition: 0.3s; font-weight: 500; }
        .nav-link i { width: 25px; font-size: 1.1rem; }
        .nav-link:hover { background-color: rgba(255, 255, 255, 0.05); color: #fff; }
        .nav-link.active { background: linear-gradient(90deg, rgba(212, 175, 55, 0.1), transparent); color: var(--gold); border-left: 3px solid var(--gold); border-radius: 4px 12px 12px 4px; }
        .logout-btn { margin-top: auto; background: rgba(255, 50, 50, 0.1); color: #ff4d4d; }
        .logout-btn:hover { background: #ff4d4d; color: white; }

        /* --- MAIN CONTENT --- */
        .main-content { margin-left: var(--sidebar-width); padding: 30px; min-height: 100vh; }
        .top-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .stat-card { background: white; border-radius: 16px; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.03); height: 100%; transition: 0.3s; }
        .stat-card:hover { transform: translateY(-5px); }
        .stat-icon { width: 48px; height: 48px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; margin-bottom: 15px; }
        .icon-gold { background: #fffbf0; color: #d4af37; }
        .icon-blue { background: #eff6ff; color: #3b82f6; }
        .icon-green { background: #f0fdf4; color: #10b981; }
        .dashboard-section { background: white; border-radius: 16px; padding: 25px; box-shadow: 0 4px 20px rgba(0,0,0,0.03); margin-bottom: 25px; }
        .section-title { font-weight: 700; color: var(--text-dark); font-size: 1.1rem; margin-bottom: 20px; }

        /* TABLE & COMPONENTS */
        .table-modern { width: 100%; border-collapse: separate; border-spacing: 0; }
        .table-modern th { text-transform: uppercase; font-size: 0.75rem; color: #6b7280; font-weight: 700; padding: 15px; border-bottom: 2px solid #f3f4f6; text-align: left; }
        .table-modern td { padding: 15px; vertical-align: middle; border-bottom: 1px solid #f9fafb; color: #374151; font-size: 0.9rem; }
        .badge-pill { padding: 8px 16px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; display: inline-flex; align-items: center; justify-content: center; min-width: 120px; box-shadow: 0 2px 5px rgba(0,0,0,0.05); }
        .badge-gold { background: #fffbf0; color: #b48e18; border: 1px solid #fde68a; }
        .badge-blue { background: #eff6ff; color: #1d4ed8; border: 1px solid #bfdbfe; }
        .badge-gray { background: #f3f4f6; color: #4b5563; border: 1px solid #e5e7eb; }
        .badge-red { background: #fef2f2; color: #b91c1c; border: 1px solid #fecaca; }
        .filter-select { border: 1px solid #e5e7eb; border-radius: 8px; padding: 8px 12px; font-size: 0.9rem; color: #374151; background-color: #fff; cursor: pointer; }
        .avatar { width: 35px; height: 35px; background: #111; color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 0.8rem; font-weight: bold; margin-right: 12px; }
        
        /* Custom Button */
        .btn-gold { background-color: var(--gold); color: white; border: none; font-weight: 600; padding: 8px 20px; border-radius: 8px; transition: 0.3s; }
        .btn-gold:hover { background-color: #b48e18; color: white; }
        .btn-action { width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; border: none; margin-left: 5px; transition: 0.2s; }
        .btn-edit { background: #eff6ff; color: #3b82f6; } .btn-edit:hover { background: #3b82f6; color: white; }
        .btn-delete { background: #fef2f2; color: #ef4444; } .btn-delete:hover { background: #ef4444; color: white; }
    </style>
</head>
<body>

<nav class="sidebar">
    <div class="brand-logo"><i class="fas fa-crown"></i> The Royal</div>
    <div class="d-flex flex-column h-100">
        <a href="#" class="nav-link active"><i class="fas fa-th-large me-3"></i> Dashboard</a>
        <a href="{{ route('home') }}" target="_blank" class="nav-link"><i class="fas fa-external-link-alt me-3"></i> Lihat Website</a>
        <form action="{{ route('logout') }}" method="POST" class="mt-auto">
            @csrf
            <button type="submit" class="nav-link logout-btn w-100 border-0 text-start"><i class="fas fa-sign-out-alt me-3"></i> Logout</button>
        </form>
    </div>
</nav>

<main class="main-content">
    
    <div class="top-header">
        <div class="welcome-text">
            <h4>Dashboard Overview</h4>
            <p>Selamat datang kembali, Admin.</p>
        </div>
        <div>
            <span class="badge bg-white text-dark shadow-sm p-2 px-3 rounded-pill border">
                <i class="far fa-calendar-alt me-2 text-warning"></i> {{ date('d M Y') }}
            </span>
        </div>
    </div>

    <div class="row g-4 mb-4">
        <div class="col-md-4"><div class="stat-card"><div class="d-flex justify-content-between align-items-start"><div><div class="text-muted small text-uppercase fw-bold mb-1">Total Tamu</div><h2 class="mb-0 fw-bold">{{ $total_tamu }}</h2></div><div class="stat-icon icon-blue"><i class="fas fa-users"></i></div></div></div></div>
        <div class="col-md-4"><div class="stat-card"><div class="d-flex justify-content-between align-items-start"><div><div class="text-muted small text-uppercase fw-bold mb-1">Skor Performa</div><h2 class="mb-0 fw-bold">{{ number_format($rata_performa, 1) }}<span class="fs-6 text-muted fw-normal">/100</span></h2></div><div class="stat-icon icon-gold"><i class="fas fa-chart-line"></i></div></div></div></div>
        <div class="col-md-4"><div class="stat-card"><div class="d-flex justify-content-between align-items-start"><div><div class="text-muted small text-uppercase fw-bold mb-1">Feedback Dominan</div><h4 class="mb-0 fw-bold" style="color: #d4af37;">@php $maxVal=max($statistik); $maxKey=array_search($maxVal, $statistik); echo $maxVal>0 ? $maxKey : '-'; @endphp</h4></div><div class="stat-icon icon-green"><i class="fas fa-smile"></i></div></div></div></div>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="dashboard-section h-100">
                <h5 class="section-title">Proporsi Kepuasan</h5>
                <div style="height: 250px; position: relative;"><canvas id="myChart"></canvas></div>
                <div class="mt-4">
                    <div class="d-flex justify-content-between small mb-2 border-bottom pb-2"><span><i class="fas fa-circle text-warning me-2"></i>Sangat Puas</span><span class="fw-bold">{{ $statistik['Sangat Puas'] }}</span></div>
                    <div class="d-flex justify-content-between small mb-2 border-bottom pb-2"><span><i class="fas fa-circle text-primary me-2"></i>Puas</span><span class="fw-bold">{{ $statistik['Puas'] }}</span></div>
                    <div class="d-flex justify-content-between small"><span><i class="fas fa-circle text-danger me-2"></i>Kurang Puas</span><span class="fw-bold">{{ $statistik['Kurang Puas'] }}</span></div>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="dashboard-section h-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="section-title mb-0">Manajemen Ulasan</h5>
                    
                    <div class="d-flex gap-2">
                        <button class="btn btn-gold btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                            <i class="fas fa-plus me-2"></i>Tambah
                        </button>
                        
                        <form action="{{ route('admin.dashboard') }}" method="GET">
                            <select name="filter" class="filter-select" onchange="this.form.submit()">
                                <option value="">Semua Status</option>
                                <option value="Sangat Puas" {{ request('filter') == 'Sangat Puas' ? 'selected' : '' }}>Sangat Puas</option>
                                <option value="Puas" {{ request('filter') == 'Puas' ? 'selected' : '' }}>Puas</option>
                                <option value="Kurang Puas" {{ request('filter') == 'Kurang Puas' ? 'selected' : '' }}>Kurang Puas</option>
                            </select>
                        </form>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table-modern">
                        <thead>
                            <tr>
                                <th>Pelanggan</th>
                                <th>Sentimen</th>
                                <th>Pesan</th>
                                <th class="text-end" style="width: 1%; white-space: nowrap;">Status</th>
                                <th class="text-center" style="width: 100px;">Aksi</th> </tr>
                        </thead>
                        <tbody>
                            @forelse($data_tamu as $tamu)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar">{{ strtoupper(substr($tamu->customer_name, 0, 1)) }}</div>
                                        <div>
                                            <div class="fw-bold text-dark">{{ $tamu->customer_name }}</div>
                                            <div class="text-muted small" style="font-size: 0.75rem;">{{ $tamu->created_at->diffForHumans() }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($tamu->message_sentiment == 'Positif') <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 rounded">Positif 😊</span>
                                    @elseif($tamu->message_sentiment == 'Negatif') <span class="badge bg-danger bg-opacity-10 text-danger px-2 py-1 rounded">Negatif 😠</span>
                                    @else <span class="text-muted small">-</span> @endif
                                </td>
                                <td width="30%">
                                    <span class="text-secondary small fst-italic">
                                        {{ $tamu->message ? Str::limit($tamu->message, 40) : 'Tidak ada pesan.' }}
                                    </span>
                                </td>
                                <td class="text-end">
                                    @php
                                        $badgeClass = 'badge-gray'; $icon = '';
                                        if($tamu->satisfaction_class == 'Sangat Puas') { $badgeClass = 'badge-gold'; $icon='<i class="fas fa-crown me-1"></i>'; }
                                        elseif($tamu->satisfaction_class == 'Puas') { $badgeClass = 'badge-blue'; }
                                        elseif($tamu->satisfaction_class == 'Kurang Puas') { $badgeClass = 'badge-red'; }
                                    @endphp
                                    <span class="badge-pill {{ $badgeClass }}">{!! $icon !!} {{ $tamu->satisfaction_class }}</span>
                                </td>
                                <td class="text-center">
                                    <button class="btn-action btn-edit" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#editModal"
                                            data-id="{{ $tamu->id }}"
                                            data-name="{{ $tamu->customer_name }}"
                                            data-message="{{ $tamu->message }}"
                                            data-satisfaction="{{ $tamu->satisfaction_score ?? 0 }}">
                                        <i class="fas fa-pencil-alt" style="font-size: 0.8rem;"></i>
                                    </button>
                                    
                                    <form action="{{ route('guestbook.destroy', $tamu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-action btn-delete">
                                            <i class="fas fa-trash" style="font-size: 0.8rem;"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr><td colspan="5" class="text-center py-5 text-muted">Belum ada data.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Tambah Ulasan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('guestbook.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Nama Pelanggan</label>
                        <input type="text" name="customer_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Pesan / Ulasan</label>
                        <textarea name="message" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Skor Kepuasan (0-100)</label>
                        <input type="number" name="satisfaction_score" class="form-control" min="0" max="100" required>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light text-muted" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-gold">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 16px;">
            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Edit Ulasan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Nama Pelanggan</label>
                        <input type="text" name="customer_name" id="edit_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Pesan / Ulasan</label>
                        <textarea name="message" id="edit_message" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold text-uppercase">Skor Kepuasan (0-100)</label>
                        <input type="number" name="satisfaction_score" id="edit_satisfaction" class="form-control" min="0" max="100" required>
                    </div>
                </div>
                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light text-muted" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-gold">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    Chart.defaults.font.family = "'Inter', sans-serif";
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ['Sangat Puas', 'Puas', 'Cukup', 'Kurang'],
            datasets: [{
                data: [{{ $statistik['Sangat Puas'] }}, {{ $statistik['Puas'] }}, {{ $statistik['Cukup'] }}, {{ $statistik['Kurang Puas'] }}],
                backgroundColor: ['#d4af37', '#3b82f6', '#fbbf24', '#ef4444'],
                borderWidth: 0,
                hoverOffset: 4
            }]
        },
        options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { display: false } }, cutout: '75%' }
    });

    const editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const message = button.getAttribute('data-message');
        const satisfaction = button.getAttribute('data-satisfaction');

        const modalTitle = editModal.querySelector('.modal-title');
        const form = document.getElementById('editForm');
        
        document.getElementById('edit_name').value = name;
        document.getElementById('edit_message').value = message;
        document.getElementById('edit_satisfaction').value = satisfaction;

        form.action = '/guestbook/' + id; 
    });
</script>

</body>
</html>