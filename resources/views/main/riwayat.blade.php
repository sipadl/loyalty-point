@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Loyalty Points History</h1>

    <div class="card">
        <div class="card-body">
            <h2 class="card-title">History</h2>
            <div>
                @foreach($history as $entry)
                    <div class="history-item">
                        <span>{{ $entry['created_at'] }}</span>
                        <span>{{ $entry['point'] }} points</span>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="d-grid gap-2 mt-3">
        <a href="{{ route('loyalty.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Loyalty Points
        </a>
    </div>
</div>
@endsection
