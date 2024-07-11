@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Loyalty Points</h1>

    <div class="d-grid gap-2 mb-4">
        <button class="btn btn-primary btn-lg" id="scanButton">
            <i class="fas fa-barcode"></i> Scan Barcode
        </button>
    </div>

    <div class="card text-center">
        <div class="card-body">
            <h2 class="total-points">Total Points: {{ $totalPoints }}</h2>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">History</h2>
            <div id="historyList" style="max-height: 400px; overflow-y: auto;">
                @foreach($history as $entry)
                <div class="history-item">
                    <span>{{ $entry['date'] }}</span>
                    <span>{{ $entry['points'] }} points</span>
                </div>
                @endforeach
            </div>
            <div class="d-grid gap-2 mt-3">
                <a href="{{ route('loyalty.history') }}" class="btn btn-secondary">
                    <i class="fas fa-history"></i> See All History
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal for scanning barcode -->
<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scanModalLabel">Scan Barcode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="scanForm" action="{{ route('loyalty.scan') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" name="barcode" id="barcodeInput" class="form-control" placeholder="Scan barcode here" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('scanForm').submit();">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('scanButton').addEventListener('click', function() {
    new bootstrap.Modal(document.getElementById('scanModal')).show();
});
</script>
@endsection
