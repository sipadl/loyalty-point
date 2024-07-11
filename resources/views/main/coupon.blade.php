@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Coupon</h1>

    <div class="row">
        @for ($i = 1; $i <= 5; $i++)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/200x100" class="card-img-top" alt="Coupon Image">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="card-title">Coupon Item {{ $i }}</h5>
                        <div class="">
                            <span class="mx-2">10 Point</span>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
