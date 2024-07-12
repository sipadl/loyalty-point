@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Loyalty Points</h1>

    <div class="d-grid gap-2 mb-4">
        <div id="reader"></div>
        <p id="result">Scanned result will appear here</p>
        <button class="btn btn-primary" style="display: block" id="scanButton">
            <i class="fas fa-qrcode"></i> Scan QR Code
        </button>
        <button class="btn btn-danger" style="display: none" id="stopButton">
            <i class="fas fa-stop"></i> Stop Scanning
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
                    <span>{{ $entry['created_at'] }}</span>
                    <span>{{ $entry['point'] }} points</span>
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
{{-- <div class="modal fade" id="scannerModal" tabindex="-1" role="dialog" aria-labelledby="scannerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scannerModalLabel">QR Code Scanner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="scanner-container" class="d-flex">
                    <div id="reader"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> --}}
@endsection
