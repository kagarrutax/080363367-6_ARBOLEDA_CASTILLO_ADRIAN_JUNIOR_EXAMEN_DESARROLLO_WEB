<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario Premium - {{ $title ?? 'Gestión' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #0f172a;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --accent-color: #38bdf8;
            --text-main: #f8fafc;
        }

        body {
            background-color: var(--primary-bg);
            background-image:
                radial-gradient(at 0% 0%, hsla(215, 98%, 61%, 0.15) 0px, transparent 50%),
                radial-gradient(at 100% 100%, hsla(199, 89%, 48%, 0.15) 0px, transparent 50%);
            color: var(--text-main);
            font-family: 'Outfit', sans-serif;
            min-height: 100vh;
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        .navbar {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--glass-border);
        }

        .nav-link {
            color: var(--text-main) !important;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            color: var(--accent-color) !important;
            transform: translateY(-2px);
        }

        .btn-premium {
            background: linear-gradient(135deg, #38bdf8 0%, #0ea5e9 100%);
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            padding: 10px 24px;
            transition: all 0.3s ease;
        }

        .btn-premium:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(56, 189, 248, 0.4);
            color: white;
        }

        .table-glass {
            color: var(--text-main);
        }

        .table-glass th {
            border-color: var(--glass-border);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }

        .table-glass td {
            border-color: var(--glass-border);
            vertical-align: middle;
        }

        .badge-stock {
            padding: 6px 12px;
            border-radius: 8px;
            font-weight: 600;
        }

        .animate-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand fw-bold text-white fs-3" href="{{ route('products.index') }}">
                <i class="fas fa-boxes-stacked me-2 text-info"></i>INVENTARIO
            </a>
            <div class="ms-auto">
                <a href="{{ route('products.create') }}" class="btn btn-premium">
                    <i class="fas fa-plus me-2"></i>Nuevo Producto
                </a>
            </div>
        </div>
    </nav>

    <div class="container pb-5">
        @if(session('success'))
            <div class="alert alert-success glass-card border-success text-white mb-4 animate-up">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>