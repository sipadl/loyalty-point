@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center my-4">
        <img src="https://via.placeholder.com/150" class="rounded-circle" alt="User Photo">
    </div>

    <div class="list-group">
        <a href="{{ route('loyalty.profile') }}" class="list-group-item list-group-item-action">
            <i class="fas fa-user"></i> Profile
        </a>
        <a href="{{ route('loyalty.settings.password') }}" class="list-group-item list-group-item-action">
            <i class="fas fa-key"></i> Change Password
        </a>
        <form action="{{ route('loyalty.logout') }}" method="POST" class="list-group-item list-group-item-action">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0" style="color: inherit; text-decoration: none;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</div>
@endsection
