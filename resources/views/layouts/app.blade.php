<!DOCTYPE html>
<html>
<head>
    <title>Loyalty Points</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-bottom: 70px; /* Space for the bottom navbar */
        }
        .card {
            margin-bottom: 20px;
        }
        .total-points {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .history-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }
        .history-item:last-child {
            border-bottom: none;
        }
        .navbar-bottom {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #ffffff;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }
        .navbar-bottom .nav-link {
            text-align: center;
        }
    </style>
</head>
<body>
    <div id="app">
        @auth
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Loyalty Points
                </a>
            </div>
        </nav>
        @endauth
        <main class="py-4">
            @yield('content')
        </main>
        @auth
        <nav class="navbar navbar-light bg-light navbar-bottom">
            <div class="container mx-4 p-2">
                <a class="nav-link" href="{{ route('loyalty.index') }}">
                    <i class="fas fa-home"></i>
                    <div>Home</div>
                </a>
                <a class="nav-link" href="{{ route('loyalty.coupon') }}">
                    <i class="fas fa-ticket-alt"></i>
                    <div>Coupon</div>
                </a>
                {{-- <a class="nav-link" href="{{ route('loyalty.promo') }}">
                    <i class="fas fa-tags"></i>
                    <div>Promo</div>
                </a> --}}
                <a class="nav-link" href="{{ route('loyalty.user') }}">
                    <i class="fas fa-user"></i>
                    <div>User</div>
                </a>
            </div>
        </nav>
        @endauth
    </div>
</body>
</html>
