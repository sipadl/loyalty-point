<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Loyalty Points</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <style>
        #html5-qrcode-button-camera-stop{
            display:none !important;
        }
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
<footer>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
    let html5QrcodeScanner;
        let isScanning = false;

        function onScanSuccess(decodedText, decodedResult) {
            // Handle the result here
            document.getElementById('result').innerText = `Scanned result: ${decodedText}`;
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
        }

        document.getElementById('scanButton').addEventListener('click', () => {
            document.getElementById('stopButton').style.display = 'block';
            document.getElementById('scanButton').style.display = 'none';
            if (!isScanning) {
                isScanning = true;
                html5QrcodeScanner = new Html5QrcodeScanner(
                    "reader", { fps: 10, qrbox: 250 });
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            }
        });

        document.getElementById('stopButton').addEventListener('click', () => {
            document.getElementById('scanButton').style.display = 'block';
            document.getElementById('stopButton').style.display = 'none';
            if (isScanning) {
                isScanning = false;
                html5QrcodeScanner.clear();
            }
        });
</script>
</html>
